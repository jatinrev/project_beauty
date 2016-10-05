<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

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

}
