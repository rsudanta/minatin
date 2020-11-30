<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    function index(){
        return view('pages.admin_order');
    }
}
