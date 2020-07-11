<?php

use Illuminate\Support\Facades\Route;

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
    return view('trangchu');
});

Route::get('trangchu',[
   'as'=>'trangchu',
   'uses'=>'PageController@getIndex'
]);

Route::get('sanpham/{id}',[
    'as'=>'sanpham',
    'uses'=>'PageController@getSanpham'
 ]);

 

Route::get('giohang',[
    'as'=>'giohang',
    'uses'=>'PageController@getGiohang'
 ]);

Route::get('gioithieu',[
   'as'=>'gioithieu',
   'uses'=>'PageController@getGioithieu'
]);
Route::get('lienhe',[
   'as'=>'lienhe',
   'uses'=>'PageController@getLienhe'
]);

Route::get('giohang/{id}',[
   'as'=>'themgiohang',
   'uses'=>'PageController@getAddtoCart'
]);


Route::get('xoagiohang/{id}',[
   'as'=>'xoagiohang',
   'uses'=>'PageController@getDeletetoCart'
]);

Route::post('trangchu',[
   'as'=>'dathang',
   'uses'=>'PageController@postCheckout'
]);

Route::get('search',[
   'as'=>'search',
   'uses'=>'PageController@getSearch'
]);

Route::get('dangky',[
   'as'=>'dangky',
   'uses'=>'PageController@getDangky'
]);

Route::post('dangky',[
   'as'=>'dangky',
   'uses'=>'PageController@postDangky'
]);

Route::get('dangnhap',[
   'as'=>'dangnhap',
   'uses'=>'PageController@getDangnhap'
]);

Route::post('dangnhap',[
   'as'=>'dangnhap',
   'uses'=>'PageController@postDangnhap'
]);



//Admin
Route::get('/admin','AdminControler@index');
Route::get('/dashboard','AdminControler@show_dashboard');
Route::post('/admin-dashboard','AdminControler@dashboard');
Route::get('/logout','AdminControler@logout');

//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/edit-category-product/{id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{id}','CategoryProduct@delete_category_product');
Route::get('/list-category-product','CategoryProduct@list_category_product');

Route::get('/active-category-product/{id}','CategoryProduct@active_category_product');
Route::get('/unactive-category-product/{id}','CategoryProduct@unactive_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{id}','CategoryProduct@update_category_product');

//Product

Route::get('/add-product','Product@add_product');
Route::get('/edit-product/{id}','Product@edit_product');
Route::get('/delete-product/{id}','Product@delete_product');
Route::get('/list-product','Product@list_product');

Route::get('/active-product/{id}','Product@active_product');
Route::get('/unactive-product/{id}','Product@unactive_product');

Route::post('/save-product','Product@save_product');
Route::post('/update-product/{id}','Product@update_product');

//Order
Route::get('/view-order','OrderController@view_order');
Route::get('/view-detail/{id}','OrderController@view_detail');
Route::get('/delete-order/{id}','OrderController@delete_order');

//User
Route::get('/list-user','UserController@list_user');
Route::get('/delete-user/{id}','UserController@delete_user');
Route::get('/edit-password/{id}','UserController@edit_password');
Route::post('/update-password/{id}','UserController@update_password');