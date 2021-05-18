<?php


namespace TinhPHP\Tool\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\PostTranslation;
use App\Services\MediaService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
                foreach ($result as $item) {
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
                    if(!empty($item['_links']['wp:featuredmedia'][0]['href'])) {
                        try {
                            $responseFeatured = $client->get($item['_links']['wp:featuredmedia'][0]['href']);
                            $resultFeatured = json_decode($responseFeatured->getBody(), true);
                            if (!empty($resultFeatured['id'])) {

                                $formData['image_id'] = 0;
                                $formData['image_url'] = $resultFeatured['guid']['rendered'];
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
                    }
                }
                $isError = 0;
            } catch (\Exception $e) {
                $isError = 1;
            }
            $page++;
        } while ($isError == 0);


        $request->session()->flash('success', 'Get data ' . $totalItem . ' items');
        return back()->withInput();
    }
}
