<?php
/**
 * @author: nguyentinh
 * @time: 10/29/19 4:05 PM
 */

namespace TinhPHP\Tool\Http\Controllers;

use App\Http\Controllers\Site\SiteController;
use TinhPHP\Tool\Models\Nav;

/**
 * Class ToolController.
 */
class ToolController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(['auth']);

        $this->data['menuMain'] = Nav::menuMain();
    }
}
