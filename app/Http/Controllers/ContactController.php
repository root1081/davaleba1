<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact')->with(['title' => 'pirveli davaleba', 'theme' => 'dark', 'showFooter' =>1, 'menu' => ['privacy', 'about', 'contact'], 'text' => 'this is contact page']);
    }
}
