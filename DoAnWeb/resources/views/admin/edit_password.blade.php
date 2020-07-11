@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Cập nhật mật khẩu
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
            @foreach($edit_password as $key => $edit)
            <div class="position-center">
                <form role="form" action="{{URL::to('/update-password/'.$edit->id)}}" method="post">
                    {{csrf_field()}}
                    <table style="margin: auto; width: 400px; height: 200px; font-size: 20px;">
                        <tr>
                            <td><label>Tên tài khoản: </label></td>
                            <td>{{$edit->ten}}</td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td>{{$edit->email}}</td>
                        </tr>
                        <tr>
                            <td>
                                <label >Mật khẩu:</label>
                            </td>
                            <td>
                                <input type="text" name="password" class="form-control" value="{{$edit->matkhau}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="update_password" class="btn btn-info">Cập nhật</button></td>
                        </tr>
                    </table>

                </form>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection