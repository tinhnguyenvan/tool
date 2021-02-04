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

    public function emoji()
    {
        $pathFile = public_path('site/emoji/emoji.txt');

        $data = [
            'file_name' => $pathFile,
            'keyword' => 'icon facebook, mat cuoi facebook, fbook, facebook emoticon, smile facebook, facebook symbols, bieu tuong facebook, emoji, viet status facebook',
            'description' => 'Tổng hợp full bộ icon facebook đầy đủ nhất, mới nhất với nhiều trạng thái khác nhau, công cụ viết status facebook kèm icon tiện lợi nhất chỉ cần click vào biểu tượng cảm xúc facebook và chọn nhiều icon facebook khác nhau',
            'title' => '👋 Icon emoji, Full trọn bộ 4000 icon facebook mới nhất - 😃 Biểu tượng cảm xúc fb 💁👌🎍😍'
        ];
        return view('site.tool.emoji', $this->render($data));
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

        return view('site.tool.qrcode', $this->render($data));
    }
}
