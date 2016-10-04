<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
}
