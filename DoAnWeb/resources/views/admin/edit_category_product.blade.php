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
                @foreach($edit_category_product as $key => $edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên loại sản phẩm</label>
                                        <input type="text" value="{{$edit_value->tieude}}" name="category_product_title" class="form-control"  placeholder="Tên loại sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <textarea style="resize: none" rows="6" class="form-control" name="category_product_content" id="exampleInputPassword1">{{$edit_value->noidung}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Link ảnh</label>
                                        <input type="text" value="{{$edit_value->linkanh}}" name="category_product_imgtype" class="form-control" id="" placeholder="Link ảnh">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Hiển thị</label>
                                        <select name="category_product_status" class="form-control input-sm m-bot15">
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

    </div>
@endsection