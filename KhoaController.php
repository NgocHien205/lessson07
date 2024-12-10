<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoaController extends Controller
{
    public function index()
    {
    // Truy vấn đọc dữ liệu từ bảng khoa
    $khoas = DB::select('select * from khoa');
    return view('khoa.index',['khoas'=>$khoas]);
    }
}
