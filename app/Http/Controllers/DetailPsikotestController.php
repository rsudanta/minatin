<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailPsikotestRequest;
use App\Http\Requests\TransaksiRequest;
use App\Models\DetailPsikotest;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailPsikotestController extends Controller
{
    public function index($slug)
    {
        $items=DetailPsikotest::with(['user'])->where('slug', $slug)->firstOrFail();
        return view('pages.user.user_detailsoal',[
            'items'=>$items
        ]);
    }



    public function success($id){
        DetailPsikotest::findOrfail($id);
        $data=([
            'detail_id' => $id,
            'user_id' => Auth::user()->id,
            'status' => 'PENDING'
        ]);
        Transaksi::create($data);
        
        return redirect()->route('user_order',Auth::user()->id);
    }
}
