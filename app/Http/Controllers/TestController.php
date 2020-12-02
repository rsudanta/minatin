<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /*titip controller buat ngetest page*/
    public function index(){
        return view('pages.user.pembayaran');
    }
}
