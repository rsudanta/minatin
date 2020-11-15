<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    function editprofile(){
        return view('pages.user.user_edit-profile');
    }
}