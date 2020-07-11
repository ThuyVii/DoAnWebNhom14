<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Bill;
use App\BillDetail;
use App\Customer;
use App\News;
use App\User;
use App\Cart;
use Session;
use Hash;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        //Banner1  1 hình điện thoại
        $slide = Slide::where('id',1)->get();
        //sản phẩm deal of the week 3 hình
        $new_product= Product::where('id_type',1)->skip(1)->take(3)->get();
        //sản phẩm nổi bật 8 hình
        $product= Product::where('id_type','<=',7)->skip(3)->take(19)->get();
        //sản phẩm khuyến mãi 8 hình
        $product_discout= Product::where('id_type','<=',7)->skip(19)->take(35)->get();
        //sản phẩm đánh giá cao  8 hình
        $product_review= Product::where('id_type','<=',7)->skip(35)->take(51)->get();
        //Banner2   3 Hình laptop
        $Banner= Product::where('id_type','<=',7)->skip(49)->take(51)->get();
        // máy tính 10 hình
        $product_2= Product::where('id_type','<=',7)->skip(3)->take(13)->get();
        //máy tính nổi bật
        $product_discout2= Product::where('id_type','<=',7)->skip(19)->take(1)->get();
        // print_r($Banner);
        // exit;
        return view('page.trangchu',compact('slide','new_product','product','product_discout','product_review','Banner','product_2','product_discout2'));
    }

    // public function getSanpham(){
    //     return view('page.chitietsanpham');
    // }

    public function getSanpham($req){
        $sanpham= Product::where('id',$req)->get();
        // print_r($sanpham);
        //  exit;
        return view('page.chitietsanpham',compact('sanpham'));
    }
    
    public function getGiohang(){
        return view('page.giohang');
    }

    public function getGioithieu(){
        return view('page.gioithieu');
    }

    public function getLienhe(){
        return view('page.lienhe');
    }

    public function getAddtoCart(Request $req,$id){
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart= new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return view('page.giohang1',['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
    }

    public function getDeletetoCart($id){
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart= new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return view('page.giohang1',['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
    }

    public function postCheckout(Request $req){
      $cart = Session::get('cart');

      $customer = new Customer;
      $customer->ten = $req->name;
      $customer->gioitinh = $req->gender;
      $customer->email = $req->email;
      $customer->diachi = $req->address;
      $customer->sdt = $req->phone;
      $customer->ghichu = $req->notes;
      $customer->save();

      $bill = new Bill;
      $bill->id_customer = $customer->id;
      $bill->ngaymua = date('Y-m-d');
      $bill->tongtien = $cart->totalPrice;
      $bill->thanhtoan = $req->payment_method;
      $bill->ghichu = $req->notes;
      $bill->save();

      foreach($cart->items as $key => $value){
        $bill_detail = new BillDetail;
        $bill_detail->id_bill = $bill->id;
        $bill_detail->id_product = $key;
        $bill_detail->soluong = $value['qty'];
        $bill_detail->gia = ($value['price']/$value['qty']);
        $bill_detail->save();
    }
    Session::forget('cart');
    return redirect()->back()->with('thongbao','Đặt hàng thành công');
}

public function getSearch(Request $req){
    $product = Product::where('tensp','like','%'.$req->key.'%')
    ->orwhere('giadau','<=',$req->key)
    ->get();
    return view('page.search',compact('product'));
}

public function getDangky(){
    return view('page.dangky');
}

public function getDangnhap(){
    return view('page.dangnhap');
}

public function postDangky(Request $req){
    $this->validate($req,[
       'email'=>'required|email|unique:users,email',
       'password'=>'required|min:6|max:10',
       'fullname'=>'required',
   ],
   [
    'email.required'=>'Vui lòng nhập email',
    'email.email'=>'Không đúng định dạng email',
    'email.unique'=>'Email đã có sử dụng',
    'password.required'=>'Vui lòng nhập password',
    'password.min'=>'Mật khẩu ít nhất 6 ký tự',
    'password.max'=>'Mật khẩu không quá 10 ký tự'
]);
    $user = new User();
    $user->ten = $req->fullname;
    $user->email = $req->email;
    $user->matkhau = $req->password;
    $user->phone = $req->phone;
    $user->diachi = $req->address;
    $user->save();
    return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
}

public function postDangnhap(Request $req){
    $this->validate($req,[
     'email'=>'required|email',
     'password'=>'required|min:6|max:20'
 ],
 [
     'email.required'=>'Vui lòng nhập email',
     'email.email'=>'Email không đúng định dạng',
     'password.required'=>'Vui lòng nhập password',
     'password.min'=>'Mật khẩu ít nhất 6 ký tự',
     'password.max'=>'Mật khẩu không quá 20 ký tự'
 ]);
    $email1 = $req->email;
    $password1 = $req->password;
    $cre = User::where('email','=',$email1)->first();
    $dk = $cre->matkhau;
    if($cre){
        $dk = $cre->matkhau;
        if($dk==$password1){
            return redirect()->back()->with(['flag'=>'success','thongbao'=>'Đăng nhập thành công']);
        }
    }
    else{
        return redirect()->back()->with(['flag'=>'danger','thongbao'=>'Đăng nhập không thành công']);
    }
}


}
