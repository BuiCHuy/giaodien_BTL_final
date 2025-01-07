<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class thanhtoan extends Controller
{
    public function index(){
        $hoadon=DB::select('select * from v_thanhtoan');
        return view('thongke.thanhtoan',compact('hoadon'));
    }
}
