<?php


namespace TinhPHP\Tool\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Post;
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
        $response = $client->get($params['link_api_post']);
        $items = json_decode($response->getBody(), true);

        if (!empty($items)) {
            foreach ($items as $item) {
                $formData['creator_id'] = Auth::id() ?? 0;
                foreach (Language::loadLanguage() as $code => $textLanguage) {
                    $formData[$code]['slug'] = $item['slug'];
                    $formData[$code]['title'] = $item['title']['rendered'];
                }
                $myObject = new Post($formData);
                $myObject->save($formData);
                if (!empty($dataCondition)) {
                    Post::query()->updateOrCreate($dataCondition, $formData);
                }
                var_dump($formData);
            }
        }
    }
}
