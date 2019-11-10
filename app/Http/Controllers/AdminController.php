<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    public function pages($pages){
        if (\View::exists('admin.pages.'.$pages)) { 
        } else { 
            
        }
        return view('admin.pages.'.$pages);
    }
}
