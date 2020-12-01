<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    function index()
    {
        $items=Transaksi::with(['user','detail_psikotest'])->get();
        return view('admin_order',[
            'items'=> $items
        ]);
    }

    public function show($id)
    {
        $items=Transaksi::with(['user','detail_psikotest'])->where('id',$id)->get();
        return view('admin_order_show',[
            'items'=>$items
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'status' => $request->status
        ];
        Transaksi::where('id',$id)->update($data);

        return redirect()->route('admin.order');
    }

}
