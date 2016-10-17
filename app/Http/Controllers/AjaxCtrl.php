<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\ajax;

class AjaxCtrl extends Controller
{
    public function ajax(Request $request, $action) {
    	$ajax_obj = new ajax();
    	if($action == 'related_language') {
    		return $ajax_obj->related_language($request);
    	}
    	return '';
    }

    public function ajax_cat($id){
    	$sub_cat_vals = array();
    	if(!empty($id)){
    		$sub_cat = DB::table('service_sub_category')->select('id','sub_category')->where('main_category_id',$id)->get();
    		foreach($sub_cat as $key => $value){
    			$sub_cat_vals[$key] = $value->sub_category;     		}

    	return $sub_cat_vals;
    	}
    	return '';
    	//return $id;
    }

}
