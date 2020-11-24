<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {
        $items = User::first();
        return view('pages.user.profile', [
            'items' => $items
        ]);
    }


    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        User::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('users.index')
            ->with('success', 'User Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
            'avatar' => 'file|image|mimes:jpeg,png,jpg',
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
            'name' => $request->name,
            'avatar' => $nama_file,
        ];

            User::find($id)->update($data);

        return redirect()->route('user_home');
    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        User::find($id)->delete();
        return redirect()->route('users.index');
    }
}
