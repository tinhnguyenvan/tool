<?php


namespace TinhPHP\Tool\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTranslation;
use App\Services\MediaService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $client = new Client();
        $page = 1;
        $totalItem = 0;
        do {
            try {
                $response = $client->get($params['link_api_post'] . '/wp-json/wp/v2/posts?orderby=id&order=asc&page=' . $page);
                $result = json_decode($response->getBody(), true);
                foreach ($result as $item) {
                    $totalItem++;
                    // category
                    $responseCategory = $client->get(
                        $params['link_api_post'] . '/wp-json/wp/v2/categories/' . $item['categories'][0]
                    );
                    $resultCategory = json_decode($responseCategory->getBody(), true);

                    $myObjectCategory = PostCategory::query()->updateOrCreate(
                        [
                            'title' => $resultCategory['name'],
                            'slug' => $resultCategory['slug'],
                        ]
                    );

                    // post
                    $formData['category_id'] = $myObjectCategory->id;
                    $formData['creator_id'] = Auth::id() ?? 0;
                    foreach (Language::loadLanguage() as $code => $textLanguage) {
                        $myPost = PostTranslation::query()->where('locale', $code)->where('slug', $item['slug'])->first(
                        );
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
