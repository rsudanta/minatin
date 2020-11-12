<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('pages.user.home');
    }
    function order(){
        return view('pages.user.order');
    }
}
