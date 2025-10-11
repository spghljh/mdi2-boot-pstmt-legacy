<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function index()
    {
        // MySQL의 mcl 테이블에서 CPU 리스트 가져오기
        $cpus = DB::table('mcl')->orderBy('id_cpu', 'asc')->get();

        // Blade 뷰에 데이터 전달
        return view('modules.box.cpu.module_box-cpu_list', compact('cpus'));
    }
}
