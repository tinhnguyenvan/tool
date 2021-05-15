<?php

use Illuminate\Support\Facades\Route;
use TinhPHP\Tool\Http\Controllers\Admin\ToolController;
use TinhPHP\Tool\Http\Controllers\Admin\WordpressToolController;

Route::group(
    [
        'prefix' => 'admin/tools'
    ],
    function () {
        // qr_code
        Route::get('/', [ToolController::class, 'index']);
        Route::get('qr_code', [ToolController::class, 'qrCode']);
        Route::post('qr_code', [ToolController::class, 'handleQrCode']);

        // short_link
        Route::get('short_link', [ToolController::class, 'shortLink']);
        Route::get('short_link/create', [ToolController::class, 'createShortLink']);
        Route::post('short_link/create', [ToolController::class, 'handleCreateShortLink']);
        Route::post('short_link/create', [ToolController::class, 'handleCreateShortLink']);

        // wordpress-tool
        Route::get('wordpress-tool', [WordpressToolController::class, 'index']);
        Route::post('wordpress-tool', [WordpressToolController::class, 'save']);
    }
);
