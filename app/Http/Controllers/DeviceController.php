<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        // 예시: devices 테이블에서 디바이스 리스트 가져오기
        $devices = DB::table('mdl')->orderBy('id_device', 'asc')->get();

        // 뷰에 데이터 전달
        return view('modules.box.cpu.module_box-device_list', compact('devices'));
    }
}
