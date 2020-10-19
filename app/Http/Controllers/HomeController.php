<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home')->with(['title' => 'pirveli davaleba', 'theme' => 'dark', 'showFooter' =>1, 'menu' => ['home', 'about', 'contact'], 'text' => 'this is home page']);
    }
}
