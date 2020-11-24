<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailPsikotestRequest;
use App\Models\DetailPsikotest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PsikotestController extends Controller
{
    public function index($id)
    {
        $items=DetailPsikotest::with(['user'])->where('user_id',$id)->get();
        return view('pages.psikolog.psikotest',[
            'items'=>$items
        ]);
    }

    public function create($id)
    {
        $items=DetailPsikotest::with(['user'])->where('user_id',$id)->get();
        return view('pages.psikolog.buat_psikotest',[
            'items'=>$items
        ]);
    }

    public function store(DetailPsikotestRequest $request)
    {
        $data = $request->all();
        $data['slug']= Str::slug($request->judul);
        

        DetailPsikotest::with(['user'])->create($data);
        return redirect()->route('psikolog.psikotest', Auth::user()->id);
    }
}