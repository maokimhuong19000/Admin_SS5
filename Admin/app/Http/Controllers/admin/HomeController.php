<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()  {
      return view('layouts.index');
    }
}
