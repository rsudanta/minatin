<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoalRequest;
use App\Models\DetailPsikotest;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    public function index($id)
    {
        DetailPsikotest::where('id', $id)->get();
        $items = Soal::with(['detail_psikotest'])->get();
        return view('pages.psikolog.show_soal', [
            'items' => $items
        ]);
    }
    public function create()
    {
        return view('pages.psikolog.buat_soal');
    }

    public function store(SoalRequest $request)
    {
        $detail=DetailPsikotest::where('user_id',Auth::user()->id)->first();
        $data = [
            'detail_id'=>$detail->id,
            'soal' => $request->soal,
            'opsi_1' => $request->opsi_1,
            'opsi_2' => $request->opsi_2,
            'opsi_3' => $request->opsi_3,
            'opsi_4' => $request->opsi_4,
        ];
        Soal::create($data);
        return redirect()->route('psikolog.psikotest.soal', $detail->id);
    }
}
