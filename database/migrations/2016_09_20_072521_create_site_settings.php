<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\SiteSettings;

class CreateSiteSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->text('value');
            $table->timestamps();
        });
        SiteSettings::create([
            'key'   => 'frontpage_slider_text',
            'value' => 'Hair stylist, Makeup look'
        ]); // To use this function you also need to set $fillable variable of class.
        SiteSettings::create([
            'key'   => 'twitter_link',
            'value' => 'https://twitter.com/'
        ]);
        SiteSettings::create([
            'key'   => 'facebook_link',
            'value' => 'https://fb.com/'
        ]);
        SiteSettings::create([
            'key'   => 'instagram_link',
            'value' => 'https://instagram.com/'
        ]);
        SiteSettings::create([
            'key'   => 'copyright',
            'value' => 'Copyright © 2016 BRC.'
        ]);
        SiteSettings::create([
            'key'   => 'text_right',
            'value' => 'YOU WILL EARN UP TO 20% COMMISSION FROM EVERY REPEATED APPOINTMENT FROM YOUR REFERRALS'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
