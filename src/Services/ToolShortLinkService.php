<?php
/**
 * @author: nguyentinh
 * @create: 11/20/19, 8:21 PM
 */

namespace TinhPHP\Tool\Services;

use TinhPHP\Tool\Models\ToolShortLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * Class ToolShortLinkService.
 *
 * @property ToolShortLink $model
 */
class ToolShortLinkService extends BaseService
{
    public function __construct(ToolShortLink $model)
    {
        parent::__construct();
        $this->model = $model;
    }

    /**
     * @param $params
     *
     * @return array
     */
    public function validator($params)
    {
        $error = [];

        $validator = Validator::make($params, [
            'title' => 'required|min:1|max:255',
            'url' => 'required|min:1|max:255',
            'short_url' => 'required|min:5|max:255|unique:' . $this->model->getTable(),
        ]);

        if ($validator->fails()) {
            static::convertErrorValidator($validator->errors()->toArray(), $error);
        }

        return $error;
    }

    public function beforeSave(&$formData = [], $isNews = false)
    {
        if ($isNews) {
            $formData['views'] = 0;
            $formData['creator_id'] = Auth::id() ?? 0;
        } else {
            $formData['editor_id'] = Auth::id() ?? 0;
        }
    }

    /**
     * @param $params
     *
     * @return object|array|bool
     */
    public function create($params)
    {
        $validator = $this->validator($params);
        if (!empty($validator)) {
            return $this->responseValidator($validator);
        }

        $this->beforeSave($params, true);
        $myObject = new ToolShortLink($params);

        if ($myObject->save($params)) {
            return $myObject;
        }

        return 0;
    }

    public function generateShortUrl()
    {
        return $this->model->generateShortUrl();
    }
}
