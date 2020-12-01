<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function index(){
        $items=User::whereIn('roles',['PSIKOLOG','USER'])->get();
        return view('admin_user',[
            'items'=>$items
        ]);
    }

    public function show($id)
    {
        $items=User::where('id',$id)->get();
        return view('admin_user_show',[
            'items'=>$items
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'roles' => $request->roles
        ];
        User::where('id',$id)->update($data);

        return redirect()->route('admin.user');
    }
}
