<?php

use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NhaTuyenDungController;
use App\Http\Controllers\UngVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/ung-vien/login', [UngVienController::class, 'login']);
Route::post('/nhan-vien/login', [NhanVienController::class, 'login']);
Route::post('/nha-tuyen-dung/login', [NhaTuyenDungController::class, 'login']);