<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePsikologController extends Controller
{
    function index()
    {
        $items = Auth::user();
        return view('pages.psikolog.profile_psikolog', [
            'items' => $items
        ]);
    }

    function show()
    {
        $items = Auth::user();
        return view('pages.psikolog.edit_profile', [
            'items' => $items
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'avatar' => 'file|image|mimes:jpeg,png,jpg',
            'name' => 'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
        if ($request->avatar != null) {
            $file = $request->file('avatar');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/avatars';
            $file->move($tujuan_upload, $nama_file);
        } else
            $nama_file = User::value('avatar');
        $data = [
            'penyelenggara'=> $request->penyelenggara,
            'name' => $request->name,
            'avatar' => $nama_file,
            'bidang'=> $request->bidang,
            'lama_kerja'=> $request->lama_kerja,
            'edukasi'=> $request->edukasi,
            'deskripsi'=> $request->deskripsi,

        ];
        $item = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('psikolog.dashboard');
    }
}
