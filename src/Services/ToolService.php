<?php
/**
 * @author: nguyentinh
 * @create: 11/20/19, 8:21 PM
 */

namespace TinhPHP\Tool\Services;

use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * Class ToolService.
 *
 * @property Media $media
 */
class ToolService extends BaseService
{
    public $destinationPath;

    public function __construct(Media $media)
    {
        parent::__construct();
        $this->media = $media;
        $this->destinationPath = storage_path() . '/app/public';
    }

    public function createQrCode($params)
    {
        $path = storage_path() . '/app/public';
        $fileName = '/upload/' . date('Y/m/d') . '/';
        if (!File::isDirectory($path . $fileName)) {
            File::makeDirectory($path . $fileName);
        }
        $size = 200;
        $format = 'png';
        $name = 'upload_qr_code_' . uniqid() . '.png';
        switch ($params['type']) {
            case 'url':
                QrCode::size($size)->format($format)->generate($params['url'], $path . $fileName . $name);
                break;
            case 'email':
                QrCode::email(
                    $params['to'],
                    $params['subject'],
                    $params['body']
                );
                break;
            case 'wifi':
                break;
            case 'vcard':
                break;
            case 'sms':
                break;
            case 'text':
                break;
            default:
                return null;
                break;
        }

        return $this->save([
            'name' => $params['type'] . '_' . $name,
            'file_name' => $fileName . $name,
            'disk' => $fileName,
            'type' => 'url',
            'size' => 0,
            'mime_type' => 0,
        ]);
    }

    public function save($params)
    {
        $status = 0;
        $content = '';

        $params = [
            'collection_name' => '',
            'name' => $params['name'],
            'file_name' => $params['file_name'],
            'size' => $params['size'],
            'mime_type' => $params['mime_type'],
            'disk' => $params['disk'],
            'custom_properties' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'model_id' => 0,
            'model_type' => '',
            'creator_id' => Auth::id() ?? 0,
            'object_type' => Media::OBJECT_TYPE_QR_CODE,
            'object_id' => 0,
            'manipulations' => null,
            'responsive_images' => null,
        ];

        $myObject = new Media($params);

        if ($myObject->save($params)) {
            return $myObject;
        }

        if (!empty($myObject)) {
            $status = 1;
        }

        return [
            'status' => $status,
            'content' => $content,
        ];
    }

    public function tabs()
    {
        return [
            'url' => trans('tool.create_qr_url'),
            'email' => trans('tool.create_qr_email'),
            'wifi' => trans('tool.create_qr_wifi'),
            'vcard' => trans('tool.create_qr_vcard'),
            'sms' => trans('tool.create_qr_sms'),
            'text' => trans('tool.create_qr_text'),
        ];
    }
}
