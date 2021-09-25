<?php
/**
 * @author: nguyentinh
 * @time: 2021/09/25 4:05 PM
 */

namespace TinhPHP\Tool\Http\Controllers;

use TinhPHP\Tool\Models\ToolShortLink;

/**
 * Class ShortLinkController.
 */
class ShortLinkController extends ToolController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($shortUrl)
    {
        $object = ToolShortLink::query()->where('short_url', $shortUrl)->first();
        if (!empty($object->id) && !empty($object->url)) {
            $object->where('id', $object->id)->increment('views');
            sleep(2);
            return redirect($object->url, 301);
        }

        return view('errors.404');
    }
}
