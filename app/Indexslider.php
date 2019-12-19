<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Indexslider extends Model
{
  use SoftDeletes;
  protected $fillable = ['indexslider_heading', 'indexslider_sub_heading', 'indexslider_details', 'indexslider_image'];
}
