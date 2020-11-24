<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function success($id){
        $transaction= Transaksi::findOrFail($id);
        $transaction->transaction_status = 'PENDING';
        $transaction->save();

        return redirect()->route('user_home');
    }
}
