<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function show(){

    	$user = Auth::user();
    	return view('profile', array('user' => $user));
    }
}
