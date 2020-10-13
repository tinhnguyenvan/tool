<?php


namespace TinhPHP\Tool\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Media;
use TinhPHP\Tool\Models\ToolShortLink;
use App\Services\MediaService;
use TinhPHP\Tool\Services\ToolService;
use TinhPHP\Tool\Services\ToolShortLinkService;
use Illuminate\Http\Request;

/**
 * Class ToolController
 * @package App\Http\Controllers\Admin
 * @property ToolService $toolService
 * @property MediaService $mediaService
 * @property ToolShortLinkService $toolShortLinkService
 */
class ToolController extends AdminController
{
    public function __construct(
        ToolService $toolService,
        MediaService $mediaService,
        ToolShortLinkService $toolShortLinkService
    ) {
        parent::__construct();
        $this->toolService = $toolService;
        $this->mediaService = $mediaService;
        $this->toolShortLinkService = $toolShortLinkService;
    }

    public function index()
    {
        return redirect(admin_url('tools/qr_code'));
    }

    public function qrCode(Request $request)
    {
        $file = null;
        if (!empty($request->get('file_id'))) {
            $file = Media::query()->where('id', $request->get('file_id'))->first();
        }
        $data = [
            'file' => $file,
            'tabs' => $this->toolService->tabs(),
            'tabActive' => $request->get('tab') ?? 'url',
            'title' => trans('tool.create_qr_code')
        ];
        return view('admin/tool.qr_code.index', $this->render($data));
    }

    public function handleQrCode(Request $request)
    {
        $params = $request->all();
        $fileId = 0;
        if (!empty($params['_token'])) {
            $file = $this->toolService->createQrCode($params);
            if (!empty($file)) {
                $fileId = $file->id;
            }
            $request->session()->flash('success', trans('tool.success_create_qr_code'));
        } else {
            $request->session()->flash('error', trans('tool.error_create_qr_code'));
        }
        return redirect(admin_url('tools/qr_code?file_id=' . $fileId), 302);
    }

    public function shortLink(Request $request)
    {
        $this->toolShortLinkService->buildCondition($request->all(), $condition, $sortBy, $sortType);
        $items = ToolShortLink::query()->where($condition)->orderBy($sortBy, $sortType)->paginate($this->page_number);

        $data = [
            'title' => trans('nav.menu_left.tool_short_link'),
            'items' => $items,
        ];
        return view('admin/tool.short_link.list', $this->render($data));
    }

    public function createShortLink(Request $request)
    {
        $data = [
            'short_url' => $this->toolShortLinkService->generateShortUrl(),
            'title' => trans('common.add') . ' ' . trans('nav.menu_left.tool_short_link'),
        ];

        return view('admin/tool.short_link.form', $this->render($data));
    }

    public function handleCreateShortLink(Request $request)
    {
        $params = $request->all();
        if (!empty($params['_token'])) {
            $result = $this->toolShortLinkService->create($params);
            if (empty($result['message'])) {
                $request->session()->flash('success', trans('common.add.success'));

                return redirect(admin_url('tools/short_link'), 302);
            } else {
                $request->session()->flash('error', $result['message']);
            }
        }

        return back()->withInput();
    }
}
