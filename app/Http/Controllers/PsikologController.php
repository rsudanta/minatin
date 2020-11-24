<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Psikolog;
use Illuminate\Support\Facades\Storage;

class PsikologController extends Controller 
{
    function list_order($id){
        $psikologs = DB::table('psikologs')->where('idPsikolog', $id)->first();
        return view('pages.psikolog.list_order', ['psikologs'=> $psikologs]);
    }
    function detail_pemesan(){
        return view('pages.psikolog.detail_pemesan');
    }
    function edit_profile($id){
        $psikologs = DB::table('psikologs')->where('idPsikolog', $id)->first();
        return view('pages.psikolog.edit_profile', ['psikologs'=> $psikologs]);
    }
    function update_profile(Request $request, $id){

        $validatedData = $request->validate([
            'avatar' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $oldData = DB::table('psikologs')->where('idPsikolog', $id)->get();

        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store('public/avatar');
            $arrPath = explode('/', $path);
            $avaName = $arrPath[count($arrPath)-1];
            
            if(count($oldData) == 1){
                $oldAvaName = $oldData[0]->namaAvaPsikolog;
                Storage::delete('public/avatar/' . $oldAvaName);
            }
        }

        $data = [
            'namaPenyelenggara' => $request->namaPenyelenggara,
            'namaPsikolog' => $request->namaPsikolog,
            'bidangPsikolog' => $request->bidangPsikolog,
            'lamaKerja' => $request->lamaKerja,
            'edukasiPsikolog' => $request->edukasiPsikolog,
            'deskripsiPsikolog'=> $request->deskripsiPsikolog,
            'namaAvaPsikolog' => isset($avaName) ? $avaName:$oldData[0]->namaAvaPsikolog,
        ];

        $affected = DB::table('psikologs')
                    ->where('idPsikolog', $id)
                    ->update($data);

        if($affected)
            return redirect()->route('edit_profile', ['id'=>$request->idPsikolog])->with('status', 'Profile has been updated successfully!');
    }
    function input_hasil(){
        return view('pages.psikolog.input_hasil');
    }
    function psikotest($id){
        $psikologs = DB::table('psikologs')->where('idPsikolog', $id)->first();
        return view('pages.psikolog.psikotest', ['psikologs'=> $psikologs]);
    }
    function buat_psikotest($id){
        $psikologs = DB::table('psikologs')->where('idPsikolog', $id)->first();
        return view('pages.psikolog.buat_psikotest', ['psikologs'=> $psikologs]);
    }
    function profile_psikolog($id){
        $psikologs = DB::table('psikologs')->where('idPsikolog', $id)->first();
        return view('pages.psikolog.profile_psikolog', ['psikologs'=> $psikologs]);
    }
}