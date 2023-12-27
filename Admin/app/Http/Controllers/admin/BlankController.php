<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlankController extends Controller
{
   public function blank(){
        return view('layouts.blank');
   }
}
