@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Quản lý đơn hàng được chọn</h3>
    
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Stt</th>
          <th>Mã đơn hàng </th>
          <th>Tổng tiền</th>
          <th>Ngày đặt</th>
          <th>Trạng thái</th>
          <th>Ngày giao hàng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>LMART0001</td>
            <td>19.000.000</td>
            <td>10/10/2018</td>
            <td>Đã giao hàng</td>
            <td>11/10/2018</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td>LMART0002</td>
            <td>13.000.000</td>
            <td>10/10/2018</td>
            <td>Chưa giao hàng</td>
            <td></td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td>LMART0003</td>
            <td>14.000.000</td>
            <td>10/10/2018</td>
            <td>Đã giao hàng</td>
            <td>11/10/2018</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
      </tbody>
    </table>
   
</div>
@endsection
