<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    function editprofile(){
        return view('pages.user.user_edit-profile');
    }
    function editpassword(){
        return view('pages.user.user_edit-password');
    }
}