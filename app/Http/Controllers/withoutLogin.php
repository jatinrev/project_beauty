<?php

/*
	ROUTES WHICH COULD BE VISITED WITHOUT LOGIN
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\NewsletterSubscriber;
use App\SiteSettings;
use DB;

class withoutLogin extends Controller
{
    public function index(Request $request) {
        $site_settings = SiteSettings::get_general_site_setting();
    	if( empty($request->all()) ) {
    		return view('cms.front_page')->with(['site_settings' => $site_settings]);
    	} else {
            // SAVING NEWSLETTER
    		$this->validate($request, [
                'email' => 'required|email'
            ]);
            
    		/* SAVEING DATA IN MODEL */
    		$newsletter_subscriber_obj = new NewsletterSubscriber;
    		$newsletter_subscriber_obj->save_newsletter($request);

    		return view('cms.front_page')->with([
                'success_msg'   => ['You have subscribed to our Newsletter.'],
                'site_settings' => $site_settings
    		]);
    	}
    }

    public function how_it_works() {
        return view('cms.how_it_works');
    }

    public function faq() {
        return view('cms.faq');
    }

    public function about_us() {
        return view('cms.about_us');
    }

    public function contact_us(Request $request) {
        if( empty($request->all()) ) {
            return view('cms.contact_us');
        } else {
            $this->validate($request, [
                'email' => 'required|email',
                'query' => 'required'
            ]);
            $request_array = $request->all();
            DB::table('contact_us')->insert([
                'email'      => $request_array['email'],
                'query'      => $request_array['query'],
                'created_at' => \Carbon\Carbon::now()
            ]);
            return view('cms.contact_us')->with(['success_msg' => ['Your request have been recieved by us, we will contact to you soon.']]);
        }
    }

}
