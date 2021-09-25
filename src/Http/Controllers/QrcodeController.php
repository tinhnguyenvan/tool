<?php
/**
 * @author: nguyentinh
 * @time: 2021/09/25
 */

namespace TinhPHP\Tool\Http\Controllers;

use Illuminate\View\View;

/**
 * Class QrcodeController.
 */
class QrcodeController extends ToolController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($slug = 'url')
    {
        $data = [
            'active_menu' => $slug,
            'keyword' => 'QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality. Get your free QR Codes now!',
            'description' => 'QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality. Get your free QR Codes now!',
            'title' => 'QR Code Generator | Create Your Free QR Codes'
        ];

        $view = 'view_tool::web.qrcode.'.$slug;

        if (!view()->exists($view)) {
            $view = 'view_tool::web.qrcode.url';
        }

        return view($view, $this->render($data));
    }
}
