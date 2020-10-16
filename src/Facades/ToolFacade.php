<?php

namespace TinhPHP\Tool\Facades;

use Illuminate\Support\Facades\Facade;

class ToolFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tool';
    }
}
