<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsikologController extends Controller 
{
    function list_order(){
        return view('pages.psikolog.list_order');
    }
    function detail_pemesan(){
        return view('pages.psikolog.detail_pemesan');
    }
    function edit_profile(){
        return view('pages.psikolog.edit_profile');
    }
    function input_hasil(){
        return view('pages.psikolog.input_hasil');
    }
}