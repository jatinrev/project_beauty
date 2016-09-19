<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsletterSubscriber extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newsletter_subscriber';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email'];


    /*
    	THIS FUNCTION IS USED TO SAVE NEWSLETTER SUBSCRIBER
     */
    public function save_newsletter(Request $request) {
    	$this->email = $request->email;
    	$this->save();
    }
}
