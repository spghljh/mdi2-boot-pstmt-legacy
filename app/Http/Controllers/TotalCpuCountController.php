<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mcl;

class TotalCpuCountController extends Controller
{
    public function index()
    {
        $mcl_record = Mcl::count(); // DB에서 CPU 총 개수 가져오기

        return view('modules.content.text.count_total_cpu', compact('mcl_record'));
    }
}
