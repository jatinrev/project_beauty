<?php

/*
    ROUTES WHICH COULD ONLY BE VISITED WHEN USER IS LOGGED IN.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * registration step 1
     */
    public function basic_detail( Request $request) {
        $user_data = Auth::user();
        if(!empty($request->all())){
            dd($request->all());
            $this->validate($request, [
                'name'      => 'required|max:255',
                'profession' => 'required',
                'about' => 'required|max:200',
                'address' => 'required|max:255'
            ]);
           

            DB::table('users')->where('id',$request->id )->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'about'   => $request->about,
                'address'   => $request->address,
            ]);
        }
        return view('auth.dashboard');
    }

    /**
     * REGISTRATION STEP 2
     */
    public function registration_add_services() {
        return view('auth.add_services_step');
    }

}
