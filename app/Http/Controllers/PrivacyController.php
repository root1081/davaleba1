<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index(){
        return view('privacy')->with(['title' => 'this is title', 'theme' => 'light', 'showFooter' =>1, 'menu' => ['privacy', 'about', 'contact'], 'text' => 'this is home page']);
    }
}
