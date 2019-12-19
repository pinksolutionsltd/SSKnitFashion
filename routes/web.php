<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//---------------------Frontend Controller Start-----------------------------------------------------------//
Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/imagegallary', 'FrontendController@imagegallary');
Route::get('/workplace', 'FrontendController@workplace');
Route::get('/contact', 'FrontendController@contact');


//---------------------Frontend Controller End-----------------------------------------------------------//

//---------------------Index:Slider Part Start-------------------------------------------------------------//
route::get('/add/indexslider', 'IndexController@addindexslider');
route::post('/indexslider/insert', 'IndexController@indexsliderinsert');
route::get('/indexslider/viewtable', 'IndexController@indexsliderviewtable');
route::get('/indexslider/delete/{indexslider_id}', 'IndexController@indexsliderdelete');
route::get('/indexslider/edit/{indexslider_id}', 'IndexController@indexslideredit');
route::post('/indexslider/update', 'IndexController@indexsliderupdate');
route::get('/indexslider/restore/{indexslider_id}', 'IndexController@indexsliderrestore');
//---------------------Index:Slider Part End-------------------------------------------------------------//


//------------------------About us part Start-------------------------------------------------------------//
route::get('/add/indexslider', 'IndexController@addindexslider');
route::post('/indexslider/insert', 'IndexController@indexsliderinsert');
route::get('/indexslider/viewtable', 'IndexController@indexsliderviewtable');
route::get('/indexslider/delete/{indexslider_id}', 'IndexController@indexsliderdelete');
route::get('/indexslider/edit/{indexslider_id}', 'IndexController@indexslideredit');
route::post('/indexslider/update', 'IndexController@indexsliderupdate');
route::get('/indexslider/restore/{indexslider_id}', 'IndexController@indexsliderrestore');
//------------------------About us part End-------------------------------------------------------------//


//------------------------Product part Start-------------------------------------------------------------//
route::get('/add/product', 'ProductController@addproduct');
route::post('/product/insert', 'ProductController@productinsert');
route::get('/product/viewtable', 'ProductController@productviewtable');
route::get('/product/delete/{indexslider_id}', 'ProductController@productdelete');
route::get('/product/edit/{product_id}', 'ProductController@productedit');
route::post('/product/update', 'ProductController@productupdate');
route::get('/product/restore/{product_id}', 'ProductController@productrestore');
//------------------------Product part End-------------------------------------------------------------//

//------------------------Product part Start-------------------------------------------------------------//
route::get('/add/category', 'ProductController@addcategory');
route::post('/category/insert', 'ProductController@insertcategory');
route::get('change/status/category/{category_id}', 'ProductController@changestatuscategory');

//------------------------Product part End-------------------------------------------------------------//

//------------------------image Gallary part Start-------------------------------------------------------------//

// route::get('/add/category', 'ProductController@addcategory');
// route::post('/category/insert', 'ProductController@categoryinsert');
// route::get('/category/viewtable', 'ProductController@categoryviewtable');
// route::get('/category/delete/{category_id}', 'ProductController@categorydelete');
// route::get('/category/edit/{category_id}', 'ProductController@categoryedit');
// route::post('/category/update', 'ProductController@categoryupdate');
// route::get('/category/restore/{category_id}', 'ProductController@categoryrestore');

//------------------------image Gallary part End-------------------------------------------------------------//
