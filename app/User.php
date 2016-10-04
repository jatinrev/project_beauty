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

    // working on
    public function get_service_main_category_table() {
        return DB::table('service_main_category');
    }

    // working on
    public function get_service_sub_category_table() {
        return DB::table('service_sub_category');
    }

    // working on
    /**
     *  get_service_list()          => 'current user all services'
     *  get_service_list($user_id)  => '$user_id all services'
     */
    public function get_service_list($user_id = null) {
        $user_id = ( $user_id == null ? $this->id : $user_id );
        return DB::table('list_services')
                    ->where('user_id', $user_id);
    }

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








