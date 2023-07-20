<?php

namespace App\Http\Controllers\fronted;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
// use App\Models\Cms;
// use App\Models\Banner;

class Add extends Controller
{
   
   public function index()
   {
       return view('fronted/index');
   }
//    public function indexx()
//    {
//        $a =Cms::select('*')->get;
//        $b =Banner::select('*')->get;
//        return view('fronted/index',compact('a','b'));
//    }

   
}