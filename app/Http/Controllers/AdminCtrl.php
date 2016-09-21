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
        // dd( $request->hasFile('banner_image') );

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

        // -------------getting old Data-------------
        $site_settings = SiteSettings::get_site_settings(['frontpage_slider_text', 'twitter_link', 'facebook_link', 'instagram_link', 'copyright', 'text_right']);

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
