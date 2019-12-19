<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;
  protected $fillable = ['category_id', 'product_name', 'product_details', 'product_image'];


  function get_category_name(){
      return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
