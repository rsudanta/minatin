<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    function index(){
        return view('pages.landingpage');
    }
}