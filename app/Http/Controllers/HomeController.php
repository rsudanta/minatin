<?php

namespace App\Http\Controllers;

use App\Models\DetailPsikotest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $items = DetailPsikotest::with(['user'])->get();
        return view('pages.user.home', [
            'items' => $items
        ]);
    }
}
