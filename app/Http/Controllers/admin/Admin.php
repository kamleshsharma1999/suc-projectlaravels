<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    //
    public function back(){
        return view('admin/dashbord');
      }
    //
}
