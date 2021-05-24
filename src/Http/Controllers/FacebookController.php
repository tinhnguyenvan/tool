<?php
/**
 * @author: nguyentinh
 * @time: 10/29/19 4:05 PM
 */

namespace TinhPHP\Tool\Http\Controllers;

use App\Http\Controllers\Site\SiteController;
use TinhPHP\Tool\Models\ToolShortLink;

/**
 * Class FacebookController.
 *
 */
final class FacebookController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function icon()
    {
        $pathFile = public_path('site/emoji/emoji.txt');

        $data = [
            'active_menu' => 'facebook_icon',
            'file_name' => $pathFile,
            'keyword' => 'icon facebook, mat cuoi facebook, fbook, facebook emoticon, smile facebook, facebook symbols, bieu tuong facebook, emoji, viet status facebook',
            'description' => 'Tổng hợp full bộ icon facebook đầy đủ nhất, mới nhất với nhiều trạng thái khác nhau, công cụ viết status facebook kèm icon tiện lợi nhất chỉ cần click vào biểu tượng cảm xúc facebook và chọn nhiều icon facebook khác nhau',
            'title' => '👋 Icon emoji, Full trọn bộ 4000 icon facebook mới nhất - 😃 Biểu tượng cảm xúc fb 💁👌🎍😍'
        ];
        return view('view_tool::web.facebook.icon', $this->render($data));
    }

    public function text()
    {
        $data = [
            'active_menu' => 'facebook_text',
            'description' => 'Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook Text Generator',
            'title' => 'Công cụ Đổi Font Chữ Facebook [kiểu đẹp thay thế YayText]',
            'keywords' => 'text,chữ,văn bản,đặc biệt,unicode,symbol,post,story,status,bài viết,miễn phí,Facebook',
        ];
        return view('view_tool::web.facebook.text', $this->render($data));
    }
}
