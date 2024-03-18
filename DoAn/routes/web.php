<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');

Route::get('/category-product', function () {
    return view('category_product');
});

Route::get('/brand-product', function () {
    return view('brand_product');
});

Route::get('/chitiet-xe', function () {
    return view('pages.chitiet_xe');
});







Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');


Route::get('/them-loaixe','App\Http\Controllers\CategoryProductController@them_loaixe');
Route::get('/tatca-loaixe','App\Http\Controllers\CategoryProductController@tatca_loaixe');
Route::post('/luu-loaixe','App\Http\Controllers\CategoryProductController@luu_loaixe');
Route::get('/an-loaixe/{category_product_id}','App\Http\Controllers\CategoryProductController@an_loaixe');
Route::get('/hienthi-loaixe/{category_product_id}','App\Http\Controllers\CategoryProductController@hienthi_loaixe');
Route::get('/chinhsua-loaixe/{category_product_id}','App\Http\Controllers\CategoryProductController@chinhsua_loaixe');
Route::get('/xoa-loaixe/{category_product_id}','App\Http\Controllers\CategoryProductController@xoa_loaixe');
Route::post('/capnhat-loaixe/{category_product_id}','App\Http\Controllers\CategoryProductController@capnhat_loaixe');



Route::get('/them-dongxe','App\Http\Controllers\BrandProductController@them_dongxe');
Route::get('/tatca-dongxe','App\Http\Controllers\BrandProductController@tatca_dongxe');
Route::post('/luu-dongxe','App\Http\Controllers\BrandProductController@luu_dongxe');
Route::get('/an-dongxe/{category_product_id}','App\Http\Controllers\BrandProductController@an_dongxe');
Route::get('/hienthi-dongxe/{category_product_id}','App\Http\Controllers\BrandProductController@hienthi_dongxe');
Route::get('/chinhsua-dongxe/{category_product_id}','App\Http\Controllers\BrandProductController@chinhsua_dongxe');
Route::get('/xoa-dongxe/{category_product_id}','App\Http\Controllers\BrandProductController@xoa_dongxe');
Route::post('/capnhat-dongxe/{category_product_id}','App\Http\Controllers\BrandProductController@capnhat_dongxe');


Route::get('/them-xe', 'App\Http\Controllers\ProductController@them_xe');
Route::get('/chinhsua-xe/{product_id}', 'App\Http\Controllers\ProductController@chinhsua_xe');
Route::get('/xoa-xe/{product_id}', 'App\Http\Controllers\ProductController@xoa_xe');
Route::get('/tatca-xe', 'App\Http\Controllers\ProductController@tatca_xe');

Route::get('/an-xe/{product_id}', 'App\Http\Controllers\ProductController@an_xe');
Route::get('/hienthi-xe/{product_id}', 'App\Http\Controllers\ProductController@hienthi_xe');

Route::post('/luu-xe', 'App\Http\Controllers\ProductController@luu_xe');
Route::post('/capnhat-xe/{product_id}', 'App\Http\Controllers\ProductController@capnhat_xe');


Route::get('/category-product/{cate_id}', 'App\Http\Controllers\CategoryProductController@hienthi_xe_cungloai');
Route::get('/brand-product/{cate_id}', 'App\Http\Controllers\BrandProductController@hienthi_xe_cungdong');