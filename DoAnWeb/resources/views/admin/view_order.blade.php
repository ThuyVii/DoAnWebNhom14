@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách đơn hàng
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
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Ngày mua</th>
            <th>Tổng tiền</th>
            <th>Phương thức Thanh toán</th>
            <th>Ghi chú</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php
          $i=0;
          @endphp
          @foreach($all_order as $key => $ord)
          @php
          $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{ $ord->id}}</td>
            <td>{{ $ord->ten}}</td>
            <td>{{ $ord->ngaymua}}</td>
            <td>{{ $ord->tongtien}}</td>
            <td>{{ $ord->thanhtoan}}</td>
            <td>{{ $ord->ghichu}}</td>
            
            <td>
              <a href="{{URL::to('/view-detail/'.$ord->id)}}" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a>
              <a onclick="return confirm('Bạn chắc muốn xóa đơn hàng này chứ?')" href="{{URL::to('/delete-order/'.$ord->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection