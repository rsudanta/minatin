<?php

namespace App\Http\Controllers;

use App\Models\DetailPsikotest;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class OrderPsikologController extends Controller
{
    function index($id)
    {
        DetailPsikotest::where('user_id',$id)->findOrFail($id);
        $pending = Transaksi::with(['user','detail_psikotest'])->where('status', 'PENDING')->get();
        $paid = Transaksi::with(['user','detail_psikotest'])->where('status', 'PAID')->get();
        $finish = Transaksi::with(['user','detail_psikotest'])->where('status', 'FINISHED')->get();
        return view('pages.psikolog.list_order', [
            'pending' => $pending,
            'paid'=>$paid,
            'finish'=>$finish
        ]);
    }}
