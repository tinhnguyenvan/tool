<?php

use Illuminate\Support\Facades\Route;
use TinhPHP\Tool\Http\Controllers\QrcodeController;
use TinhPHP\Tool\Http\Controllers\FacebookController;

Route::get('sl/{short_link}', [QrcodeController::class, 'shortLink']);
Route::get('tool/generate-qrcode', [QrcodeController::class, 'generateQrcode']);
Route::get('tool/facebook-icon', [FacebookController::class, 'icon']);
Route::get('tool/facebook-text/{slug}', [FacebookController::class, 'text']);
Route::get('tool/facebook-text', [FacebookController::class, 'text']);
