<?php


namespace TinhPHP\Tool\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Media;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\PostTranslation;
use App\Services\MediaService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class WordpressToolController
 * @package App\Http\Controllers\Admin
 * @property MediaService $mediaService
 */
class WordpressToolController extends AdminToolController
{
    public function __construct(
        MediaService $mediaService
    ) {
        parent::__construct();
        $this->mediaService = $mediaService;
    }

    public function index()
    {
        $data = [

        ];
        return view('view_tool::admin.wordpress_tool.index', $this->render($data));
    }

    public function save(Request $request)
    {
        $params = $request->all();

        $domain = $params['link_api_post'];

        $client = new Client();
        $page = 1;
        $totalItem = 0;
        do {
            try {
                $response = $client->get($domain . '/wp-json/wp/v2/posts?orderby=id&order=asc&page=' . $page);
                $result = json_decode($response->getBody(), true);
                foreach ($result as $key => $item) {
                    $formData = [];

                    $totalItem++;
                    // category
                    $responseCategory = $client->get($domain . '/wp-json/wp/v2/categories/' . $item['categories'][0]);
                    $resultCategory = json_decode($responseCategory->getBody(), true);

                    $myObjectCategory = PostCategory::query()->updateOrCreate(
                        [
                            'title' => $resultCategory['name'],
                            'slug' => $resultCategory['slug'],
                        ]
                    );

                    // tags
                    $responseTags = $client->get($domain . '/wp-json/wp/v2/tags?post=' . $item['id']);
                    $resultTags = json_decode($responseTags->getBody(), true);
                    $tags = [];
                    if (!empty($resultTags)) {
                        foreach ($resultTags as $tag) {
                            $tags[] = $tag['name'];
                        }
                    }

                    // featured media
                    if (!empty($item['_links']['wp:featuredmedia'][0]['href'])) {
                        try {
                            $responseFeatured = $client->get($item['_links']['wp:featuredmedia'][0]['href']);
                            $resultFeatured = json_decode($responseFeatured->getBody(), true);
                            if (!empty($resultFeatured['id'])) {
                                $formData['image_id'] = 0;
                                $formData['image_url'] = $resultFeatured['guid']['rendered'];

                                $formData['image_url'] = str_replace(
                                    'http://127.0.0.1:8001',
                                    $domain,
                                    $formData['image_url']
                                );
                            }
                        } catch (\Exception $e1) {
                            Log::debug($e1->getMessage());
                        }
                    }

                    // post
                    $formData['tags'] = !empty($tags) ? implode(',', $tags) : '';
                    $formData['category_id'] = $myObjectCategory->id;
                    $formData['creator_id'] = Auth::id() ?? 0;
                    foreach (Language::loadLanguage() as $code => $textLanguage) {
                        $myPost = PostTranslation::query()
                            ->where('locale', $code)
                            ->where('slug', $item['slug'])
                            ->first();

                        $formData[$code]['slug'] = $item['slug'];
                        $formData[$code]['title'] = $item['title']['rendered'];
                        $formData[$code]['detail'] = $item['content']['rendered'];
                        $formData[$code]['summary'] = $item['excerpt']['rendered'];

                        if (!empty($myPost->slug)) {
                            $myObject = Post::query()->find($myPost->post_id);
                            $myObject->update($formData);
                        } else {
                            $myObject = new Post($formData);
                            $myObject->save($formData);
                        }

                        // tags
                        PostTag::insertOrUpdateTags($myObject->tags, PostTag::SOURCE_POST, $myObject->id);

                        // save image
                        if ($myObject->image_id == 0 && $myObject->image_url != '') {
                            $destinationPath = storage_path() . '/app/public';

                            $nameOldImage = explode('/', $myObject->image_url);
                            $nameOldImage = end($nameOldImage);

                            $minType = explode('.', $myObject->image_url);
                            $minType = end($minType);

                            $contents = file_get_contents(
                                str_replace($nameOldImage, urlencode($nameOldImage), $myObject->image_url)
                            );

                            $prefixPath = '/upload/' . date('Y/m/d/');
                            $fileName = 'wp_' . date('Ymd') . '_' . $item['id'] . '.' . $minType;

                            file_put_contents($destinationPath . $prefixPath . $fileName, $contents);

                            $params = [
                                'collection_name' => '',
                                'name' => $fileName,
                                'file_name' => $prefixPath . $fileName,
                                'size' => 0,
                                'mime_type' => $minType,
                                'disk' => $prefixPath . $fileName,
                                'created_at' => date('Y-m-d H:i:s'),
                                'model_id' => $myObject->id,
                                'model_type' => Post::class,
                                'creator_id' => Auth::id() ?? 0,
                                'custom_properties' => json_encode([]),
                                'manipulations' => json_encode([]),
                                'responsive_images' => json_encode([]),
                            ];
                            $paramsQuery = [
                                'object_type' => Media::OBJECT_TYPE_POST,
                                'object_id' => $myObject->id,
                            ];
                            $upload = Media::query()->updateOrCreate($paramsQuery, $params);

                            if (!empty($upload->id)) {
                                $myObject->image_id = $upload->id;
                                $myObject->image_url = $upload->file_name;
                                $myObject->save();
                            }
                        }
                    }
                }
                $isError = 0;
            } catch (\Exception $e) {
                Log::debug($e->getMessage());
                $isError = 1;
            }
            $page++;
        } while ($isError == 0);


        $request->session()->flash('success', 'Get data ' . $totalItem . ' items');
        return back()->withInput();
    }
}
