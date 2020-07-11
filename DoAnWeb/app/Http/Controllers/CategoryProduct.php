<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
	public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id)
        {
            return Redirect::to('dashboard');
        }
        else
        {
            return Redirect::to('admin')->send();
        }
    }
    public function add_category_product(){
    	$this->AuthLogin();
    	return view('admin.add_category_product');
    }
    public function list_category_product(){
    	$this->AuthLogin();
    	$list_category_product = DB::table('type_products')->get();
    	$manager_category_product = view('admin.list_category_product')->with('list_category_product',$list_category_product);
    	return view('admin_layout')->with('admin.list_category_product',$manager_category_product);
    }
    public function save_category_product(Request $Request)
    {
    	$this->AuthLogin();
    	$data = array();
    	$data['tieude'] = $Request->category_product_title;
    	$data['noidung'] = $Request->category_product_content;
    	$data['linkanh'] = $Request->category_product_imgtype;
    	$data['hienthi'] = $Request->category_product_status;

    	DB::table('type_products')->insert($data);
    	session::put('message','Thêm sản phẩm thành công');
    	return Redirect::to('add-category-product');
    }
    public function unactive_category_product($id)
    {
    	$this->AuthLogin();
    	DB::table('type_products')->where('id',$id)->update(['hienthi'=>0]);
    	Session::put('message','Ẩn loại sản phẩm thành công');
    	return Redirect::to('list-category-product');
    }
    public function active_category_product($id)
    {
    	$this->AuthLogin();
    	DB::table('type_products')->where('id',$id)->update(['hienthi'=>1]);
    	Session::put('message','Hiện loại sản phẩm thành công');
    	return Redirect::to('list-category-product');
    }
    public function edit_category_product($id)
    {
    	$this->AuthLogin();
    	$edit_category_product = DB::table('type_products')->where('id',$id)->get();
    	$manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
    	return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);
    }
    public function update_category_product(Request $Request,$id)
    {
    	$this->AuthLogin();
    	$data = array();
    	$data['tieude'] = $Request->category_product_title;
    	$data['noidung'] = $Request->category_product_content;
    	$data['linkanh'] = $Request->category_product_imgtype;
    	// $data['hienthi'] = $Request->category_product_status;

    	DB::table('type_products')->where('id',$id)->update($data);
    	session::put('message','Cập nhật loại sản phẩm thành công');
    	return Redirect::to('list-category-product');

    }
    public function delete_category_product($id)
    {
    	$this->AuthLogin();
    	DB::table('type_products')->where('id',$id)->delete();
    	session::put('message','Xóa loại sản phẩm thành công');
    	return Redirect::to('list-category-product');
    }
}
