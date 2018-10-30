<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['product_name','category_id','manufacturer_id','product_price','product_quantity','product_short_description','product_long_description','product_image','publication_status'];
}
