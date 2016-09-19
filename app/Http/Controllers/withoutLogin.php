<?php

/*
	ROUTES WHICH COULD BE VISITED WITHOUT LOGIN
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\NewsletterSubscriber;

class withoutLogin extends Controller
{
    public function index(Request $request) {
    	if( empty($request->all()) ) {
    		return view('cms.front_page');
    	} else {
    		$this->validate($request, [
                'email'     => 'required|email'
            ]);
    		/* SAVEING DATA IN MODEL */
    		$newsletter_subscriber_obj = new NewsletterSubscriber;
    		$newsletter_subscriber_obj->save_newsletter($request);

    		return view('cms.front_page')->with([
    			'success_msg' => 'You have subscribed to our Newsletter.'
    		]);
    	}
    }

}
