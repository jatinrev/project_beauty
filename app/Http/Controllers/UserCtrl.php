<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserCtrl extends Controller
{
    public function index() {
    	return view('cms.profile');
    }
}
