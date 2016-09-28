<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
            'user_type' => 'required|max:8|min:8|not_in:isAdmin'
        ]);
    }

    /**
     * Handle a registration request for the application.
     * JATIN - WHEN REGISTRATION IS DONE THIS IS THE FUNCTION WHERE THE $request COMES INITIALLY
     * DEFAULT OF THIS IS THERE IN THE triat RegistersUsers 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user_data = $this->create($request->all());
        send_mail($user_data->email, url('register/verify/'.$user_data->confirmation_code), 'confermation code.');
        return redirect('/');
    }

    /**
     * JATIN - THIS FUNCTION IS CALLED WHEN USER IS TRYING TO CONFIRM HIS/HER ACCOUNT, ROUTE OF THIS IS THERE IN THE web.php
     * @param  [type] $confirmationCode [description]
     * @return [type]                   [description]
     */
    public function confirmRegistration($confirmationCode) {
        $current_user = User::where('confirmation_code', $confirmationCode)->first();
        if( !empty($current_user) ) {
            $current_user_array = $current_user->toArray();
            if($current_user_array['confirmed'] == 0) {
                $current_user->confirmed = 1;
                $current_user->save();
                $this->guard()->login($current_user);
                return redirect($this->redirectPath());
            } else {
                return redirect('/')->with(['custom_errors' => ['This id has already been confirmed']]);
            }
        } else {
            return redirect('/')->with(['custom_errors' => ['Confermation code not found.']]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'              => $data['name'],
            'email'             => $data['email'],
            'confirmation_code' => str_random(30),
            'password'          => bcrypt($data['password']),
            'user_type'         => $data['user_type']
        ]);
    }
}
