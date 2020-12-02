<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    function index($id)
    {
        // Auth::user()->where('id', $id)->findOrFail();
        $pending = Transaksi::with(['user','detail_psikotest'])->where('status', 'PENDING')->where('user_id',$id)->get();
        $paid = Transaksi::with(['user','detail_psikotest'])->where('status', 'PAID')->where('user_id',$id)->get();
        $finish = Transaksi::with(['user','detail_psikotest'])->where('status', 'FINISHED')->where('user_id',$id)->get();
        return view('pages.user.order', [
            'pending' => $pending,
            'paid'=>$paid,
            'finish'=>$finish
        ]);
    }
}
