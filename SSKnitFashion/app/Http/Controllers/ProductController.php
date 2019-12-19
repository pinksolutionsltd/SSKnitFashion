<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
use Carbon\Carbon;
use App\Category;

class ProductController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


//----------------------------Product Add Function-----------------------------------//
  function addproduct(){

      $categories = Category::where('status',1)->get();
      return view('product/add', compact('categories'));
  }

  //--------------------------End Product Add Function-----------------------------------//


  //----------------------------Start Product Insert Function-----------------------------------//

  function productinsert(Request $request){
  // print_r($request->all());

    //---------------Validation Part------------------
    $request->validate(
    [
      'category_id' => 'required',
      'product_name' => 'required',
      'product_details' => 'required',
    ],
    [
      'category_id.required' => "Please fill up the name of Category",
      'product_name.required'=> "Please fill up the name of Product",
      'product_details.required' => "Please fill up the Details",
    ]
  );

  //------------------End validation---------------------------

    //--------After Validation ---------------------
    //--------Image Upload----------------------
    if($request->hasFile('product_image')){
      // $new_file_location = $request->file('indexslider_image')->store('indexslider_image_folder');//--------File storage System----

      $product_image = $request->file('product_image');
      $filename = str_random(30).'.'.$product_image->getClientOriginalExtension();
      Image::make($product_image)->resize(270,350)->save( base_path('public/product_image_folder/' . $filename));



      Product::insert([
        'category_id' => $request->category_id,
        'product_name' => $request->product_name,
        'product_details' => $request->product_details,
        'created_at' => Carbon::now(),
        'product_image' => 'product_image_folder/'.$filename,
      ]);

     return back()->with('success', 'Item Insert Successfully!');
     }


    else{
      return back();
    }

  }
//---------------------------------------------End of Insert Part---------------------------------------------------//





//--------------Product Table View Function------------------------------------------------------------------//

  function productviewtable(){
    $products = Product::orderBy('id', 'desc')->get();
    $product_restores = Product::onlyTrashed()->get();
    $categories = Category::where('status',1)->get();
    return view('product/table', compact('products', 'product_restores', 'categories'));
    // print_r($products);
  }

  //--------------End Product Table View Function--------------------------------------------------------//


  //----------------------Delete Function Start---------------
  function productdelete($product_id){
    // echo $mainslider_id;
    $imageLink = Product::where('id', $product_id)->first();
    $image = $imageLink->product_image;
    // if ($image) {
    //   unlink($image);
    //   }
    Product::findOrFail($product_id)->delete();
    return back()->with('deletesuccess', 'Item deleted successfully!');
  }
  //----------------------Delete Function End--------------------------------------//



  //----------------------Edit Function Start--------------------------------------//
  function productedit($product_id){
    // echo $mainslider_id;
    $categories = Category::all();
    $products = Product::findOrFail($product_id);
    return view('product/edit', compact('products', 'categories'));
  }
  //----------------------Edit Function End-------------------------------------------//


  //---------------------Update Function Started---------------------------------------//
  function productupdate(Request $request){
    // print_r($request->all());


    //---------------Validation Part------------------
    $request->validate(
    [
      'category_id' => 'required',
    ],
    [
      'category_id.required' => "Please fill up the name of Category",
    ]
  );

  //------------------End validation---------------------------



      //-----------------------Delete Previous Image from Derectory------------------//
      if($request->hasFile('product_image')){

        $imageLink = Product::where('id', $request->product_id)->first();
        $image = $imageLink->product_image;
        // echo $image;
        if ($image) {
          unlink($image);
        }

        $product_image = $request->file('product_image');
        $filename = str_random(30).'.'.$product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(270,350)->save( base_path('public/product_image_folder/' . $filename));


        Product::findOrFail($request->product_id)->update(
          [
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_details' => $request->product_details,
            'product_image' => 'product_image_folder/'.$filename,
          ]
        );
        return redirect('/product/viewtable');
      }

      else{
        Product::findOrFail($request->product_id)->update(
          [
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_details' => $request->product_details,
            // 'slider_image' => $request->slider_image,
          ]
        );
        return redirect('/product/viewtable');
      }

  }         //-----------End of Update Function ----------------



  //-----------------------------------Start Restore Item Part------------------------------------
    function productrestore($product_id){
      Product::onlyTrashed()->findOrFail($product_id)->restore();
      return back();
    }
  //----------------------------End Resytore Item Part----------------------------------------------




//-----------------------Start Category Part----------------------------------------------//


        //----Add Category---------
        function addcategory(){
          $categories = Category::all();
          return view('category/view', compact('categories'));
        }

        //---------------Insert Catagory------
        function insertcategory(Request $request){
        // print_r($request->all());
        Category::insert([
          "category_name"=>$request->category_name,
          "created_at"=>Carbon::now()
        ]);
        return back()->with('success', 'Category Inserted successfully!');
        }

        //---------------Change Status Catagory-----------------------------------------------------------//

        function changestatuscategory($category_id){
          $category_info = Category::find($category_id);
          // echo $category_info;
          if($category_info->status == 1){
            $category_info->status = 2;
                }
          else {
            $category_info->status = 1;
          }
          $category_info->save();
          return back();
        }


//-----------------------End Category Part------------------------------------------------//



  }
       //--------------------------------------End Of IndexController Class---------------------------------------------//
