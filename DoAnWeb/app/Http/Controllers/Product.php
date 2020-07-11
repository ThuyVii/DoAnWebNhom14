<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class Product extends Controller
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
    public function add_product(){
        $this->AuthLogin();
    	return view('admin.add_product');
    }
    public function list_product(){
        $this->AuthLogin();
    	$list_product = DB::table('products')->get();
    	$manager_product = view('admin.list_product')->with('list_product',$list_product);
    	return view('admin_layout')->with('admin.list_product',$manager_product);
    }
    public function save_product(Request $Request)
    {
        $this->AuthLogin();
    	$data = array();
    	$data['ten'] = $Request->product_name;
    	$data['giadau'] = $Request->product_price;
    	$data['giasau'] = $Request->product_discount;
    	$data['mota'] = $Request->product_desc;
    	$data['hienthi'] = $Request->product_status;
    	$data['linkanh'] = $Request->product_img;
    	$data['id_type'] = $Request->product_type;

    	DB::table('products')->insert($data);
    	session::put('message','Thêm sản phẩm thành công');
    	return Redirect::to('add-category-product');
    }
    public function unactive_product($id)
    {
        $this->AuthLogin();
    	DB::table('products')->where('id',$id)->update(['hienthi'=>0]);
    	Session::put('message','Ẩn sản phẩm thành công');
    	return Redirect::to('list-category-product');
    }
    public function active_product($id)
    {
        $this->AuthLogin();
    	DB::table('products')->where('id',$id)->update(['hienthi'=>1]);
    	Session::put('message','Hiện sản phẩm thành công');
    	return Redirect::to('list-category-product');
    }
    public function edit_product($id)
    {
        $this->AuthLogin();
    	$edit_product = DB::table('products')->where('id',$id)->get();
    	$manager_product = view('admin.edit_product')->with('edit_product',$edit_product);
    	return view('admin_layout')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $Request,$id)
    {
        $this->AuthLogin();
    	$data = array();
    	$data['name'] = $Request->product_name;
    	$data['giadau'] = $Request->product_price;
    	$data['giasau'] = $Request->product_discount;
    	$data['thongtin'] = $Request->product_desc;
    	$data['linkanh'] = $Request->product_img;
    	$data['id_type'] = $Request->product_type;
    	// $data['hienthi'] = $Request->product_status;

    	DB::table('products')->where('id',$id)->update($data);
    	session::put('message','Cập nhật sản phẩm thành công');
    	return Redirect::to('list-category-product');

    }
    public function delete_product($id)
    {
        $this->AuthLogin();
    	DB::table('products')->where('id',$id)->delete();
    	session::put('message','Xóa sản phẩm thành công');
    	return Redirect::to('list-category-product');
    }
}
