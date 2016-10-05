<?php

/*
	ROUTES WHICH SHOWS OR USES THINGS RELATED TO USER(COMMON TO BOTH TYPE OF USER)
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserCtrl extends Controller
{
    public function index() {
    	return view('cms.profile');
    }

    public function appointment_list() {
    	return view('cms.appointment_list');
    }
}
