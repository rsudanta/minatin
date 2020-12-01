<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoalRequest;
use App\Models\DetailPsikotest;
use App\Models\Opsi;
use App\Models\Soal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $items=DetailPsikotest::where('user_id',Auth::user()->id)->first();
        return view('pages.psikolog.buat_soal',[
            'items'=>$items
        ]);
    }

    public function show($id){
        Soal::where('detail_id',$id);
        $items=Opsi::all();
        return view('pages.psikolog.show_soal',[
            'items'=>$items
        ]);
    }

    public function store(SoalRequest $request)
    {
        $detail_id = $request->input('detail_id');
        $questionText = $request->input('soal');
        $optionArray = $request->input('opsi');

        $question = new Soal();
        $question->detail_id = $detail_id;
        $question->soal = $questionText;
        $question->save();

        $questionToAdd = Soal::latest()->first();
        $questionID = $questionToAdd->id;

        foreach ((array) $optionArray as $opt) {
            $option = new Opsi();
            $option->soal_id = $questionID;
            $option->opsi = $opt;
            $option->save();
        }

        return redirect()->route('psikolog.psikotest.soal.show',$detail_id);
    }
}
