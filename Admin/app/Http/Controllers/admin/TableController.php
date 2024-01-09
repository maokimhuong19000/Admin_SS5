<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TableController extends Controller
{
    public function table(){
        $data['rooms']=DB::table('tbl_rooms')->get();
        return view('layouts.table',$data);
    }
}
