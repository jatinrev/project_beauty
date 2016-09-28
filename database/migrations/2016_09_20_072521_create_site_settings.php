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
        SiteSettings::create([
            'key'   => 'banner_image',
            'value' => 'banner_image.jpg'
        ]);
        SiteSettings::create([
            'key'   => 'site_logo',
            'value' => 'site_logo.png'
        ]);
        SiteSettings::create([
            'key'   => 'textarea_professional',
            'value' => "<h3>Lorem Ipsum is simply</h3>\r\n
                    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,\r\n
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with\r\n
                    <br>\r\n
                    <br>\r\n
                    <ul>\r\n
                        <li>Remaining essentially unchanged</li>\r\n
                        <li>Make a type specimen book</li>\r\n
                        <li>Unknown printer</li>\r\n
                    </ul>\r\n"
        ]);
        SiteSettings::create([
            'key'   => 'textarea_customer',
            'value' => "<h3>Lorem Ipsum is simply</h3>\r\n
                    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,\r\n
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with\r\n
                    <br>\r\n
                    <br>\r\n
                    <ul>\r\n
                        <li>Remaining essentially unchanged</li>\r\n
                        <li>Make a type specimen book</li>\r\n
                        <li>Unknown printer</li>\r\n
                    </ul>\r\n"
        ]);
        $array = array('fill it1', 'fill it2', 'fill it3','fill it4','fill it5','fill it6','fill it7','fill it8');
        foreach ($array as $key => $value) {
            SiteSettings::create([
                'key'   => 'Professional_text'.$key,
                'value' => $value
            ]);    
        }
        

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
