<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about')->with(['title' => 'pirveli davaleba', 'theme' => 'dark', 'showFooter' =>1, 'menu' => ['privacy', 'about', 'contact'], 'text' => 'this is about page']);
    }
}
