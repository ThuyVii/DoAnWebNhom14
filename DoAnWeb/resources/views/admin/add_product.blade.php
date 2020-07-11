@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm sản phẩm
        </header>
        <div class="panel-body">
            <?php
            $message= Session::get('message');
            if ($message)
            {
                echo $message;
                Session::put('message',null);
            }
            ?>
            <div class="position-center">
                <form role="form" action="{{URL::to('/save-product')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" name="category_product_name" class="form-control"  placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mã hãng</label>
                                        <input type="text" name="category_product_type" class="form-control"  placeholder="Mã hãng">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá trước</label>
                                        <input type="text" name="category_product_price" class="form-control" id="" placeholder="Giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sau</label>
                                        <input type="" name="category_product_discount" class="form-control" id="" placeholder="Giá khuyến mãi">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Thông tin sản phẩm</label>
                                        <textarea style="resize: none" rows="6" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Thông tin sản phẩm"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Link ảnh</label>
                                        <input type="text" name="category_product_img" class="form-control" id="" placeholder="Link ảnh">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Hiển thị</label>
                                        <select name="category_product_status" class="form-control input-sm m-bot15">
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="add_category_product" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>

    </div>
@endsection