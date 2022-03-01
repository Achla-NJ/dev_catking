<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }
    public function manage_profile(){
        return view('profile_edit');
    }
}
