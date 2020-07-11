<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
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
    public function list_user()
    {
    	//$this->AuthLogin();
    	$list_user = DB::table('users')->get();
    	$manager_user = view('admin.list_user')->with('list_user',$list_user);
    	return view('admin_layout')->with('admin.list_user',$manager_user);
    }
    public function delete_user($id)
    {
        $this->AuthLogin();
    	DB::table('users')->where('id',$id)->delete();
    	session::put('message','Xóa tài khoản thành công');
    	return Redirect::to('list-user');
    }
    public function edit_password($id)
    {
    	$this->AuthLogin();
    	$edit_password = DB::table('users')->where('id',$id)->get();
    	$manager_user = view('admin.edit_password')->with('edit_password',$edit_password);
    	return view('admin_layout')->with('admin.edit_password',$manager_user);
    }
    public function update_password(Request $Request,$id)
    {
    	$this->AuthLogin();
    	$data = array();
    	$data['matkhau'] = $Request->password;
    	// $data['updated_at']= $Request->timestamps('');
    	DB::table('users')->where('id',$id)->update($data);
    	session::put('message','Cập nhật mật khẩu thành công');
    	return Redirect::to('list-user');

    }
}
