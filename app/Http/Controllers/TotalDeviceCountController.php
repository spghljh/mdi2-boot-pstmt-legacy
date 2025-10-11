<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mdl;

class TotalDeviceCountController extends Controller
{
    public function index()
    {
        $mdl_record = Mdl::count(); // DB에서 DEVICE 총 개수 가져오기

        return view('modules.content.text.count_total_device', compact('mdl_record'));
    }
}
