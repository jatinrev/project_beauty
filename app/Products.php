<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use App\User;

class Products extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_name', 'product_description', 'product_image', 'product_price'];

    /*
        src : https://www.youtube.com/watch?v=xIBST5vVq84
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    function add_product_image($file) {
        $product_image_name  = time().$file->getClientOriginalName();
        $file_full_path      = $file->storeAs('all', $product_image_name);
        $this->product_image = $file->getClientOriginalName();
        return $file->getClientOriginalName();
    }

    /**
     * @param [type = Request] $request
     */
    function add_products($request) {
        $this->user_id             = Auth::user()->id;
        $this->product_name        = $request['title'];
        $this->product_description = $request['description'];
        if( $request->hasFile('product_image') ) {
            $this->add_product_image($request['product_image']); // file is added to the model within the function.
        }
        $this->product_price       = $request['price'];
        $this->save();
        return $this;
    }

    function get_all_products_pagination($user_id = null) {
        $user_id = ( $user_id == null ? Auth::user()->id : $user_id );
        return $this->select(['id', 'product_image', 'product_name', 'product_price', 'product_description'])
                ->where('user_id', $user_id)->paginate(2);
    }

}











