<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Jurusan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Response;

class HasilPsikotestController extends Controller
{
    function index($id)
    {
        $order = Transaksi::where('status', 'FINISHED')->where('user_id', $id)->first();
        $items = Hasil::with(['user', 'soal', 'detail_psikotest'])->where('user_id', $id)->get();
        return view('pages.psikolog.hasil', [
            'items' => $items,
            'order' => $order
        ]);
    }

    function show($id)
    {
        $order = Transaksi::where('status', 'FINISHED')->where('user_id', $id)->first();
        $items = Hasil::with(['user', 'soal', 'detail_psikotest'])->where('user_id', $id)->get();
        return view('pages.psikolog.input_hasil', [
            'items' => $items,
            'order' => $order
        ]);
    }

    function store(Request $request)
    {
        $request->validate([
            'jurusan1' => 'required',
            'jurusan2' => 'required',
            'jurusan3' => 'required',
            'alasan' => 'required',
            'hasil' => 'file|mimes:doc,pdf,docx,ppt,pptx',
        ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('hasil');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage/file';
        $file->move($tujuan_upload, $nama_file);

        $data = [
            'jurusan1' => $request->jurusan1,
            'jurusan2' => $request->jurusan2,
            'jurusan3' => $request->jurusan3,
            'alasan' => $request->alasan,
            'hasil' => $nama_file,
            'order_id' => $request->order_id,
            'user_id' => $request->user_id,
        ];

        Jurusan::create($data);

        $transaction = Transaksi::where('id', $request->order_id)->first();
        $transaction->status = 'CHECKED';
        $transaction->save();

        return redirect()->route('psikolog.order', Auth::user()->id);
    }

    public function hasil_user($id)
    {
        $items = Jurusan::where('order_id', $id)->first();
        return view('pages.user.hasil', [
            'items' => $items,
        ]);
    }

    public function download($id)
    {
        $items = Jurusan::where('order_id', $id)->value('hasil');
        $file = public_path() . "/storage/file/" . $items;
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, $items, $headers);
    }


    public function get_pdf($id)
    {
        $items = Transaksi::where('status', 'FINISHED')->where('user_id', $id)->first();
        $hasil = Hasil::with(['user', 'soal', 'detail_psikotest'])->where('user_id', $id)->get();
        $user = User::where('id', $id)->value('name');

        $pdf = PDF::loadview('hasil_pdf', ['hasil' => $hasil,'items'=>$items]);
        return $pdf->download(time() . '_' . $user . '.pdf');
    }
}
