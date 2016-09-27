<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationCtrl extends Controller
{
    public function dashboard() {
    	return view('auth.dashboard');
    }
}
