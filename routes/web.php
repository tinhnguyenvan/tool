<?php

// tool
use Illuminate\Support\Facades\Route;
use TinhPHP\Tool\Http\Controllers\ToolController;

Route::get('sl/{short_link}', [ToolController::class, 'shortLink']);
Route::get(
    'tool',
    function () {
        return redirect()->route('icon-facebook');
    }
);
Route::get('tool/icon-facebook', [ToolController::class, 'emoji'])->name('icon-facebook');
Route::get('tool/generate-qrcode', [ToolController::class, 'generateQrcode'])->name('generate-qrcode');
