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
        $pending = Transaksi::with(['user', 'detail_psikotest'])->where('status', 'PENDING')->where('user_id', $id)->get();
        $paid = Transaksi::with(['user', 'detail_psikotest'])->where('status', 'PAID')->where('user_id', $id)->get();
        $finish = Transaksi::with(['user', 'detail_psikotest'])->where('status', 'FINISHED')->where('user_id', $id)->get();
        $check = Transaksi::with(['user', 'detail_psikotest'])->where('status', 'CHECKED')->where('user_id', $id)->get();
        return view('pages.user.order', [
            'pending' => $pending,
            'paid' => $paid,
            'finish' => $finish,
            'check' => $check
        ]);
    }

    public function show($id)
    {
        $items = Transaksi::find($id);
        return view('pages.user.pembayaran', [
            'items' => $items
        ]);
    }


    public function bukti(Request $request, $id)
    {
        $request->validate([
            'bukti' => 'file|image|mimes:jpeg,png,jpg',
        ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('bukti');

        $nama_file = time() . "_" . $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage/bukti';
        $file->move($tujuan_upload, $nama_file);

        $data = [
            'bukti' => $nama_file,
        ];
        $item = Transaksi::findOrFail($id);
        $item->update($data);
        return redirect()->route('user_order', Auth::user()->id);
    }
}
