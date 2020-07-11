@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Cập nhật thông tin sản phẩm
        </header>
            <?php
            $message= Session::get('message');
            if ($message)
            {
                echo $message;
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">
                @foreach($edit_product as $key => $edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('/update-product/'.$edit_value->id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="Product_name">Tên sản phẩm</label>
                                        <input type="text" value="{{$edit_value->tensp}}" name="product_name" class="form-control" id="Product_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mã hãng</label>
                                        <input type="text" value="{{$edit_value->id_type}}" name="product_type" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Giá trước</label>
                                        <input type="text" value="{{$edit_value->giadau}}" name="product_price" class="form-control" id="" placeholder="Giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sau</label>
                                        <input type="text" value="{{$edit_value->giasau}}" name="product_discount" class="form-control" id="" placeholder="Giá khuyến mãi">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Thông tin sản phẩm</label>
                                        <textarea style="resize: none" rows="6" class="form-control" name="product_desc" id="exampleInputPassword1">{{$edit_value->mota}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Link ảnh</label>
                                        <input type="text" value="{{$edit_value->linkanh}}" name="product_img" class="form-control" id="">
                                    </div>
                                    <button type="submit" name="update_product" class="btn btn-info">Cập nhật</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

    </div>
@endsection