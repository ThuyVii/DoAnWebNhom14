<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
// use App\bills;
// use App\bill_detail;
// use App\customer;
// use App\products;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class OrderController extends Controller
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
	public function view_detail($id)
	{
		$this->AuthLogin();
		$order_detail = DB::table('bills')
		->where('bills.id',$id)
		->join('bill_detail','bills.id','=','bill_detail.id_bill')
		->join('customer','bills.id_customer','=','customer.id')
		->join('products','bill_detail.id_product','=','products.id')
		->select('bills.*','customer.*','products.*','bill_detail.*')->get();
		// echo '<pre>';
		// print_r($order_detail);
		// echo '</pre>';
		$detail = view('admin.view_detail')->with('order_detail',$order_detail);
    	return view('admin_layout')->with('admin.view_detail',$detail);
		// return view('admin.view_order')->with(compact('order_detail','customer','product'));
	}
	public function view_order()
	{
		$this->AuthLogin();
		$all_order = DB::table('bills')
		->join('customer','bills.id_customer','=','customer.id')
		->select('bills.*','customer.ten')
		->orderby('bills.id','desc')->get();
    	$manager_detail = view('admin.view_order')->with('all_order',$all_order);
    	return view('admin_layout')->with('admin.view_order',$manager_detail);
	}
	public function delete_order($id)
    {
        $this->AuthLogin();
		DB::table('bills')->where('id',$id)->delete();
		DB::table('bill_detail')->where('id_bill',$id)->delete();
    	session::put('message','Xóa đơn hàng thành công');
    	return Redirect::to('view-order');
    }
}
