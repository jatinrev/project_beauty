<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\SiteSettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // JATIN-SHARING DATA IN ALL VIEWS
        // INCLUDE ONLY THOSE KEYS WHICH WILL BE USED IN ALL THE VIEWS
        $site_settings = SiteSettings::get_site_settings(['twitter_link', 'facebook_link', 'instagram_link', 'copyright']);
        View::share('site_settings_provider', $site_settings);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
