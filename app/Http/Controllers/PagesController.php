<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('content')->with(['title' => 'pirveli davaleba', 'theme' => 'dark', 'showFooter' =>1, 'menu' => ['home', 'about', 'contact']]);
    }
}
