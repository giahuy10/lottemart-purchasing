@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tạo yêu cầu mua hàng</h3>
    <table class="table">
      <tr>
        <td><b>Mã</b></td>
        <td>LMART0001</td>
        <td><b>Người tạo</b></td>
        <td>Nhân viên ABC</td>
        <td><b>Ngày tạo</b></td>
        <td>07/11/2018</td>
      </tr>
    </table>
    <h4>Danh sách hàng cần mua</h4>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Stt</th>
          <th>Tên sản phẩm</th>
          <th>ĐVT</th>
          <th>Số lượng</th>
          <th>Ghi chú</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>
            <select name="" class="form-control" id="">
              <option value="1">Gạo tám hải hậu</option>
              <option value="2" selected >Bánh gạo</option>
              <option value="3">Nước mắm 500ml</option>
            </select>
          </td>
          <td>
            <select name="" class="form-control" id="">
              <option value="1">Chai</option>
              <option value="2">Kg</option>
              <option value="3" selected>Thùng</option>
            </select>
          </td>
          <td>
            <input type="number" placeholder="4" class="form-control">
          </td>
          <td>
            <input type="text" class="form-control">
          </td>
          <td>
            <button class="btn btn-danger">
              <i class="fa fa-close"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            <select name="" class="form-control" id="">
              <option value="1">Gạo tám hải hậu</option>
              <option value="2">Bánh gạo</option>
              <option value="3">Nước mắm 500ml</option>
            </select>
          </td>
          <td>
            <select name="" class="form-control" id="">
              <option value="1">Chai</option>
              <option value="2" selected>Kg</option>
              <option value="3">Thùng</option>
            </select>
          </td>
          <td>
            <input type="number" placeholder="100" class="form-control">
          </td>
          <td>
            <input type="text" class="form-control">
          </td>
          <td>
            <button class="btn btn-danger">
              <i class="fa fa-close"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            <select name="" class="form-control" id="">
              <option value="1">Gạo tám hải hậu</option>
              <option value="2">Bánh gạo</option>
              <option value="3" selected >Nước mắm 500ml</option>
            </select>
          </td>
          <td>
            <select name="" class="form-control" id="">
              <option value="1">Chai</option>
              <option value="2">Kg</option>
              <option value="3">Thùng</option>
            </select>
          </td>
          <td>
            <input type="number" placeholder="200" class="form-control">
          </td>
          <td>
            <input type="text" class="form-control">
          </td>
          <td>
            <button class="btn btn-danger">
              <i class="fa fa-close"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-success btn-lg" href="{{ route('purchasing-manager') }}">Gửi yêu cầu</a>
</div>
@endsection


