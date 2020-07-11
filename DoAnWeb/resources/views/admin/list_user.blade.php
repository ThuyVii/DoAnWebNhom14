@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách tài khoản
    </div>
    <div class="row w3-res-tb">
      
    </div>
    <div class="table-responsive">
      <?php
      $message= Session::get('message');
      if ($message)
      {
        echo $message;
        Session::put('message',null);
      }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên tài khoản</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>SĐT</th>
            <th>Địa chỉ</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($list_user as $key => $user)
          <tr>
            <td>{{$user->ten }}</td>
            <td>{{$user->email }}</td>
            <td>
              {{$user->matkhau}}
              <a href="{{URL::to('/edit-password/'.$user->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
            </td>
            <td>{{$user->phone}}</td>
            <td>{{$user->diachi}}</td>
            <td>
              <a onclick="return confirm('Bạn chắc muốn xóa tài khoản này chứ?')" href="{{URL::to('/delete-user/'.$user->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection