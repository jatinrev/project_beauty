<?php
/*
    USED FOR ONLY ADMIN ROUTES
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//model calls
use App\NewsletterSubscriber;
use App\SiteSettings;
use App\User;

class AdminCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    // admin/frontpage
    public function frontpage(Request $request) {
        $request_data  = $request->all();
        $site_settings = [
            'frontpage_slider_text' => []
        ];

        // -------------Join the club section PROFESSIONAL text-------------
        if( !empty($request_data['action']) && trim($request_data['action']) == 'form_professional_submit' ) {
            $textarea_professional = SiteSettings::where('key', '=', 'textarea_professional')->update(['value' => $request->textarea_professional]);
            redirect('admin/frontpage');
        }

        // -------------Join the club section CUSTOMER text-------------
        if( !empty($request_data['action']) && trim($request_data['action']) == 'form_customer_submit' ) {
            $textarea_customer = SiteSettings::where('key', '=', 'textarea_customer')->update(['value' => $request->textarea_customer]);
            redirect('admin/frontpage');
        }

        // -------------Frontpage Image Text-------------
        if( !empty($request_data['action']) && trim($request_data['action']) == 'frontpage_slider_text' ) {
            $site_settings_frontpage_text = SiteSettings::where('key', '=', 'frontpage_slider_text')->update(['value' => $request_data['frontpage_slider_text']]);
            redirect('admin/frontpage');
        }

        // -------------Frontpage Image Text-------------
        if( !empty($request_data['action']) && trim($request_data['action']) == 'frontpage_footer_links' ) {
            // $site_settings_frontpage_text = SiteSettings::where('key', '=', 'frontpage_slider_text')->update(['value' => $request_data['frontpage_slider_text']]);
            redirect('admin/frontpage');
        }

        // -------------Upload banner image-------------
        if ( !empty($request_data['action']) && trim($request['action']) == 'frontpage_image_uploading_banner' && $request->hasFile('banner_image') ) {
            $file = $request->banner_image->storeAs('uploaded_images', 'banner_image.jpg');
            redirect('admin/frontpage');
        }

        // -------------Upload site logo-------------
        if ( !empty($request_data['action']) && trim($request['action']) == 'action_site_logo' && $request->hasFile('site_logo') ) {
            
            $file = $request->site_logo->storeAs('uploaded_images', 'site_logo.png');
            redirect('admin/frontpage');
        }


        // -------------getting old Data------------- 'twitter_link', 'facebook_link', 'instagram_link', 'copyright'
        $site_settings = SiteSettings::get_site_settings(['frontpage_slider_text', 'twitter_link', 'facebook_link', 'instagram_link', 'copyright', 'text_right', 'textarea_professional', 'textarea_customer']);

        // -------------View-------------
        return view('admin.contentManagement.frontpage')->with([
            'site_settings' => $site_settings
        ]);
    }


    /**
     * LISTING OF USERS
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listUsers(Request $request)
    {
        // dd($request->all());
        $business_users = User::where('user_type', '=', 'business')->paginate(2)->setPageName('businesspage');/**/
        $customer_users = User::where('user_type', '=', 'customer')->paginate(2)->setPageName('customerpage');/**/

        // dd($business_users);
        return view('admin.listUsers')->with([
            'businesses' => $business_users,
            'customers'  => $customer_users
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newsletter()
    {
        $newsletters = NewsletterSubscriber::paginate(2)->setPageName('newsletters');
        return view('admin.newsletter')->with([
            'newsletters' => $newsletters
        ]);
    }

}
