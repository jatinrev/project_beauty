<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ajax extends Model
{
    public function related_language(Request $request) {
		$user_languages_db = DB::table('user_language')
			                    ->select('language_name')
			                    ->where('language_name', 'like', '%'.$request->key.'%')
			                    ->groupBy('language_name')
			                    ->paginate(10);
        $user_language_autocomplete_array = array();
        foreach ($user_languages_db as $key => $value) {
            $user_language_autocomplete_array[] = $value->language_name;
        }
        return $user_language_autocomplete_array;
    }
}
