<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mcl;
use App\Models\Mdl;

class IndexController extends Controller
{
    public function index()
    {
        $mcl_record = Mcl::count(); // Mcl 모델에서 레코드 수 가져오기
        $mdl_record = Mdl::count(); // Mdl 모델에서 레코드 수 가져오기
    
        return view('index', compact('mcl_record', 'mdl_record'));
    }
}
