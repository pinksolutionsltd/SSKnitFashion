<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indexslider;
use Image;
use Carbon\Carbon;

class IndexController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


function addindexslider(){
  return view('indexslider/add');
}

function indexsliderinsert(Request $request){
// print_r($request->all());

  //---------------Validation Part------------------
  $request->validate(
  [
    'indexslider_heading' => 'required',
    'indexslider_sub_heading' => 'required',
    'indexslider_details' => 'required',
  ],
  [
    'indexslider_heading.required' => "Please fill up the name of Slider Heading",
    'indexslider_sub_heading.required'=> "Please fill up the name of Slider Sub Heading",
    'indexslider_details.required' => "Please fill up the name of Slider Details",
  ]
);

  //---------------End Validation Part------------------

  //--------After Validation ---------------------
  //--------Image Upload----------------------
  if($request->hasFile('indexslider_image')){
    // $new_file_location = $request->file('indexslider_image')->store('indexslider_image_folder');//--------File storage System----

    $indexslider_image = $request->file('indexslider_image');
    $filename = str_random(30).'.'.$indexslider_image->getClientOriginalExtension();
    Image::make($indexslider_image)->resize(1920,600)->save( base_path('public/indexslider_image_folder/' . $filename));



    Indexslider::insert([
      'indexslider_heading' => $request->indexslider_heading,
      'indexslider_sub_heading' => $request->indexslider_sub_heading,
      'indexslider_details' => $request->indexslider_details,
      'created_at' => Carbon::now(),
      'indexslider_image' => 'indexslider_image_folder/'.$filename,
    ]);

   return back()->with('success', 'Item Insert Successfully!');
   }

  else{
    return back();
  }


}
//------------------End validation---------------------------


//----------------------Delete Function Start---------------
function indexsliderdelete($indexslider_id){
  // echo $mainslider_id;
  $imageLink = Indexslider::where('id', $indexslider_id)->first();
  $image = $imageLink->indexslider_image;
  // if ($image) {
  //   unlink($image);
  //   }
  Indexslider::findOrFail($indexslider_id)->delete();
  return back()->with('deletesuccess', 'Item deleted successfully!');
}
//----------------------Delete Function End-----------

//----------------------Edit Function Start----------------------
function indexslideredit($indexslider_id){
  // echo $mainslider_id;
  $indexsliders = Indexslider::findOrFail($indexslider_id);
  return view('indexslider/edit', compact('indexsliders'));
}
//----------------------Edit Function End----------------------


//---------------------Update Function Started---------------------
function indexsliderupdate(Request $request){
  // print_r($request->all());

    //-----------------------Delete Previous Image from Derectory------------------//
    if($request->hasFile('indexslider_image')){

      $imageLink = Indexslider::where('id', $request->indexslider_id)->first();
      $image = $imageLink->indexslider_image;
      // echo $image;
      if ($image) {
        unlink($image);
      }

      $indexslider_image = $request->file('indexslider_image');
      $filename = str_random(30).'.'.$indexslider_image->getClientOriginalExtension();
      Image::make($indexslider_image)->resize(1920,600)->save( base_path('public/indexslider_image_folder/' . $filename));


      Indexslider::findOrFail($request->indexslider_id)->update(
        [
          'indexslider_heading' => $request->indexslider_heading,
          'indexslider_sub_heading' => $request->indexslider_sub_heading,
          'indexslider_details' => $request->indexslider_details,
          'indexslider_image' => 'indexslider_image_folder/'.$filename,
        ]
      );
      return redirect('/indexslider/viewtable');
    }

    else{
      Indexslider::findOrFail($request->indexslider_id)->update(
        [
          'indexslider_heading' => $request->indexslider_heading,
          'indexslider_sub_heading' => $request->indexslider_sub_heading,
          'indexslider_details' => $request->indexslider_details,
          // 'slider_image' => $request->slider_image,
          // 'slider_image' =>
        ]
      );
      return redirect('/indexslider/viewtable');
    }

}         //-----------End of Update Function ----------------



//-----------------------------------Start Restore Item Part------------------------------------
  function indexsliderrestore($indexslider_id){
    Indexslider::onlyTrashed()->findOrFail($indexslider_id)->restore();
    return back();
  }
//----------------------------End Resytore Item Part----------------------------------------------



//--------------Index Slider Table View Function-----------------

function indexsliderviewtable(){
  $indexsliders = Indexslider::orderBy('id', 'desc')->get();
  $indexslider_restores = Indexslider::onlyTrashed()->get();
  return view('indexslider/table', compact('indexsliders', 'indexslider_restores'));
  // print_r($mainslider);
}


}
     //--------------------------------------End Of IndexController Class---------------------------------------------//
