<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

protected $fillable=['category_name','category_description','category_status'];
}