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

     // ----------------upload professional image and text ----------
        if(!empty($request_data['action']) && trim($request['action']) == 'Professional_text'){
             dd($request_data);
            for ($i=0; $i < 8; $i++) {

                $Professional_text = SiteSettings::where('key', '=', 'Professional_text'.$i)->update(['value' =>$request_data['Professional_text'.$i]]);
            }
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newsletter()
    {
        $newsletters = NewsletterSubscriber::paginate();
        return view('admin.newsletter')->with([
            'newsletters' => $newsletters->toArray()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
