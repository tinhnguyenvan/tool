<?php
/**
 * @author: nguyentinh
 * @time: 10/29/19 4:05 PM
 */

namespace TinhPHP\Tool\Http\Controllers;
use App\Http\Controllers\Site\SiteController;
use TinhPHP\Tool\Models\ToolShortLink;

/**
 * Class ToolController.
 *
 */
final class ToolController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function shortLink($shortUrl)
    {
        $object = ToolShortLink::query()->where('short_url', $shortUrl)->first();
        if (!empty($object->id) && !empty($object->url)) {
            $object->where('id', $object->id)->increment('views');
            sleep(2);
            return redirect($object->url, 301);
        }

        return view('errors.404');
    }

    public function generateQrcode()
    {
        $data = [
            'keyword' => 'QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality. Get your free QR Codes now!',
            'description' => 'QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality. Get your free QR Codes now!',
            'title' => 'QR Code Generator | Create Your Free QR Codes'
        ];

        return view('view_tool::web.tool.qrcode', $this->render($data));
    }
}
