<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'user_type', 'confirmed', 'confirmation_code', 'profession','address','about'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
         - Used in registration step-1
     */
    public function get_current_user_languages() {
        $output = array();
        $get_language = DB::table('user_language')
                            ->where('user_id', $this->id)
                            ->select('language_name')
                            ->get();
        foreach ($get_language as $key => $value) {
            $output[] = $value->language_name;
        }
        return $output;
    }

    /*
     *   - functions for REGISTRATION STEP-2
     */
    public function add_user_category() {
        return '';
    }
    public function add_user_sub_category() {
        return '';
    }

}








