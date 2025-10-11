<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TotalCpuCountController;

// 인덱스 페이지    
Route::get('/mdi-laravel', [IndexController::class, 'index']);
 
// CPU 리스트 페이지
Route::get('/mdi-laravel/cpu_list', [CpuController::class, 'index']);

// 디바이스 리스트 페이지
Route::get('/mdi-laravel/device_list', [DeviceController::class, 'index']);

// 전체 CPU 수
Route::get('/mdi-laravel/cpu-count', [TotalCpuCountController::class, 'index']);



