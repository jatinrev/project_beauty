<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Illuminate\Http\Request;

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

    // INCOMPLETE
    public function get_service_main_category_table() {
        return DB::table('service_main_category');
    }

    // INCOMPLETE
    public function get_service_sub_category_table() {
        return DB::table('service_sub_category');
    }

    // INCOMPLETE
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
    /**
     * [insert_user_image]
     * USED IN REGISTRATION STEP-1
     * @return [type] [description]
     */
    public function insert_user_image(Request $request, $user_image_attr) {
        if( $request->hasFile($user_image_attr) ){
            $user_image = $request[$user_image_attr]->storeAs('user_images', time().$user_image_attr.'.jpg');
            return str_replace('user_images/', '', $user_image);
        }
        return false;
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








