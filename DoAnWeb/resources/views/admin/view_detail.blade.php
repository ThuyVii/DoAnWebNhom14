@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin khách hàng
    </div>
    <div class="row w3-res-tb">
  
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Khách hàng</th>
            <th>Địa chỉ</th>
            <th>SDT</th>
            <th>Tổng tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php $test=0 ?>
           @foreach($order_detail as $key => $detail)
           @if ($test==0)
          <tr>
            <td>{{$detail->ten}}</td>
            <td>{{$detail->diachi}}</td> 
            <td>{{$detail->sdt}}</td>  
            <td>{{$detail->tongtien}}</td>        
          </tr>
          <?php $test=1 ?>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tiết đơn hàng
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
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($order_detail as $key => $detail)
           <?php $i=1 ?>
          <tr>
            <td>
              {{$i}}
            </td>
            <td>{{$detail->tensp}}</td>
            <td>{{$detail->soluong}}</td>
            <td>{{$detail->giasau}}</td>
            <td>{{$detail->gia}}</td>
          </tr>
        <?php $i++; ?>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection