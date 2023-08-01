<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Request $r)
    {
      
        return view('admin_blog');
    
    }
}
