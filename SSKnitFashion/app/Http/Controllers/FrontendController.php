<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indexslider;
use App\Category;
use App\Product;
use Carbon\Carbon;
use Image;

class FrontendController extends Controller
{


  function index(){
    $indexsliders = Indexslider::all();
    $products = Product::all();
    $categories = Category::all();
    return view('index/index', compact('indexsliders', 'products', 'categories'));
  }


function about(){
  return view('about/about');
}

function imagegallary(){
  return view('imagegallary/imagegallary');
}
function workplace(){
  return view('workplace/workplace');
}
function contact(){
  return view('contact/contact');
}

} //-------------------------End of The Class----------------------------------------------//
