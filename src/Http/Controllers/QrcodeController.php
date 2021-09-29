<?php
/**
 * @author: nguyentinh
 * @time: 2021/09/25
 */

namespace TinhPHP\Tool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * Class QrcodeController.
 */
class QrcodeController extends ToolController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request, $slug = 'url')
    {
        $data = [
            'active_menu' => 'generate_qrcode',
            'sub_active_menu' => $slug,
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

    public function download(Request $request, $slug)
    {
        $path = storage_path('app/public/upload/tool_');
        $isDownload = 0;
        $fileName = '';

        switch ($slug) {
            case 'url':
                $fileName = md5($request->get('url')).'.png';
                QrCode::format('png')->generate($request->get('url'), $path.$fileName);
                $isDownload = 1;
                break;
        }

        if ($isDownload) {
            return response()->download($path.$fileName);
        }

        return redirect(base_url('tool/generate-qrcode'));
    }
}
