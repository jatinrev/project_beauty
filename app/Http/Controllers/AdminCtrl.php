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
use DB;


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

     // ----------------upload professional text ----------
        if(!empty($request_data['action']) && trim($request['action']) == 'Professional_text'){
             /*dd($request_data);*/
            for ($i=0; $i < 8; $i++) {

                $Professional_text = SiteSettings::where('key', '=', 'Professional_text'.$i)->update(['value' =>$request_data['Professional_text'.$i]]);
            }
            redirect('admin/frontpage');
        }

        // --------------upload professsional image ---------------------
        if (!empty($request_data['action']) && trim($request['action']) == 'Professional_text') {
            for($i=0; $i<8; $i++) {
                if($request->hasFile('Professional_image'.$i) == true){
                    $Professional_image = $request_data['Professional_image'.$i]->storeAs('uploaded_images','professional_image'.$i.'.jpg');
                }
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
        $site_settings = SiteSettings::get_site_settings(['frontpage_slider_text', 'twitter_link', 'facebook_link', 'instagram_link', 'copyright', 'text_right', 'textarea_professional', 'textarea_customer','Professional_text0','Professional_text1','Professional_text2','Professional_text3','Professional_text4','Professional_text5','Professional_text6','Professional_text7']);

        // -------------View-------------
        return view('admin.contentManagement.frontpage')->with([
            'site_settings' => $site_settings
        ]);
    }

    /**
     * CONTENTMANAGEMENT/ADDFAQS
     * @param Request $request [description]
     */
    public function addFaqs(Request $request) {
        if( !empty($request->action) && $request->action == 'form_add_faqs' ) {
             //dd($request->action);
            //dd($request->all());
            // VALIDATION
            DB::table('faq')->insert([
                'question'   => $request->question,
                'answer'     => $request->textarea_data,
                'created_at' => \Carbon\Carbon::now()
            ]);
            $faqs = \App\AdminModel::get_all_faqs();
            return view('admin.contentManagement.add-faqs')->with([
                'faqs' => $faqs
            ]);
        } elseif (!empty($request->action) && $request->action =='delete_content') {
           // dd($request->faq);
            DB::table('faq')->where('id',$request->faq)->delete();
            $faqs = \App\AdminModel::get_all_faqs();
            return view('admin.contentManagement.add-faqs')->with([
                'faqs' => $faqs
                ]);
        } else {
            $faqs = \App\AdminModel::get_all_faqs();
            // dd($faqs);
            return view('admin.contentManagement.add-faqs')->with([
                'faqs' => $faqs
            ]);
        }
    }
    // delete data of faq by pushker 
    /*public function destroy(){
        DB::table('faq')->delete();
        return view('admin.contentManagement.add-faqs')->with([
                'faqs' => $faqs
            ]);
    }*/

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

    public function contactus()
    {
        $contactus = DB::table('contact_us')->select('email', 'query')->paginate(2);
        // $contactus = contactus::paginate(2)->setPageName('contactus');
        return view('admin.contactus')->with(['contact_us' => $contactus
        ]);
    }

}
