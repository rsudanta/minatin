<?php

namespace App\Http\Controllers;

use App\Models\DetailPsikotest;
use App\Models\Hasil;
use App\Models\Soal;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KerjakanController extends Controller
{
    function index($id)
    {
        $order = Transaksi::where('detail_id', $id)->where('status','PAID')->where('user_id',Auth::user()->id)->first();
        $items = Soal::with(['opsi'])->where('detail_id', $id)->get();
        return view('pages.user.user_kerjakan', [
            'items' => $items,
            'order' => $order
        ]);
    }

    function store(Request $request)
    {
        $questions = $request->input('opsi');
        $detail_id = $request->input('detail_id');
        $order_id = $request->input('order_id');
        
        foreach ((array)$questions as $key => $value) {
            foreach ((array)$value as $answerKey) {
                $userOption = new Hasil();
                $userOption->user_id =Auth::user()->id;
                $userOption->soal_id = $key;
                $userOption->opsi_id = $answerKey;
                $userOption->order_id = $order_id;
                $userOption->detail_id= $detail_id;
                $userOption->save();
            }
        }


        $transaction= Transaksi::where('detail_id',$detail_id)->where('user_id',Auth::user()->id)->where('status','PAID')->first();
        $transaction->status = 'FINISHED';
        $transaction->save();

        return redirect()->route('user_home');
    }
}
