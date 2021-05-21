<?php

// tool
use Illuminate\Support\Facades\Route;
use TinhPHP\Tool\Http\Controllers\ToolController;
use TinhPHP\Tool\Http\Controllers\FacebookController;

Route::get('sl/{short_link}', [ToolController::class, 'shortLink']);
Route::get('tool/generate-qrcode', [ToolController::class, 'generateQrcode'])->name('generate-qrcode');
Route::get('tool/facebook-icon', [FacebookController::class, 'icon'])->name('icon-facebook');
Route::get('tool/facebook-text', [FacebookController::class, 'text'])->name('facebook-text');
