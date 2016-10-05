<?php

/*
    ROUTES WHICH COULD ONLY BE VISITED WHEN USER IS LOGGED IN.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;

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
        $user_data = Auth::user(); // this is elloquent
        if(!empty($request->all())){
            dd($request->all());
            $this->validate($request, [
                'name'           => 'required|max:255',
                'profession'     => 'required',
                'languages'      => 'required',
                'address'        => 'required|max:255',
                'about'          => 'required',
                'facebook_link'  => 'max:255',
                'twitter_link'   => 'max:255',
                'linked_in_link' => 'max:255'
            ]);
            $user_language_array = explode(',', $request->languages);
            // delete previous language of this user.
            DB::table('user_language')
                ->where('user_id', $user_data->id)
                ->delete();
            foreach ($user_language_array as $value) {
                if( trim($value) != '' ) {
                    DB::table('user_language')->insert([
                        'user_id'       => $user_data->id,
                        'language_name' => trim($value),
                        'created_at'    => \Carbon\Carbon::now()
                    ]);
                }
            }

            $user_data->facebook_link  = $request->facebook_link;
            $user_data->twitter_link   = $request->twitter_link;
            $user_data->linked_in_link = $request->linked_in_link;
            $user_data->name           = $request->name;
            $user_data->profession     = $request->profession;
            $user_data->address        = $request->address;
            $user_data->about          = $request->about;
            $user_data->save();
        }
        return view('auth.dashboard')->with([
            'user_data'          => $user_data
        ]);
    }



    /**
     * REGISTRATION STEP 2
     */
    public function registration_add_services( Request $request ) {
        $user_model = new User();
        if( !empty($request->all()) ) {
            // this function is to add main category to the table
            $user_model->add_user_category();
            // this function is here to add sub category to the admin.
            $user_model->add_user_sub_category();
            dd($request);
            $this->validate($request, [
                
            ]);
            DB::table();
        }
        return view('auth.add_services_step');
    }

    /**
     * REGISTRATION STEP 3
     */
    public function registration_add_availability() {
        return view('auth.add_products');
    }

    /**
     * REGISTRATION STEP 4
     */
    public function registration_add_products() {
        return view('auth.add_products');
    }

    /**
     * REGISTRATION STEP 5
     */
    public function registration_add_gallery() {
        return view('auth.add_gallery');
    }


}











