<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    public static function get_all_faqs() {
    	return \DB::table('faq')->select('id', 'question', 'answer')->get();
    }

    public static function insert_faq() {

    }
   
    	
}
