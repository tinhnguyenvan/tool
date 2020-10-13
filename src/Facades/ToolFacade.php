<?php

namespace TinhPHP\School\Facades;

use Illuminate\Support\Facades\Facade;

class ToolFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tool';
    }
}
