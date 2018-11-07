@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Quản lý nhà cung cấp</h3>
    <button class="btn btn-success">Thêm NCC mới</button>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Stt</th>
          <th>Tên nhà cung cấp</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th>Địa chỉ</th>
          <th>Mã số thuế</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>Công ty TNHH ABC</td>
            <td>abc@gmail.com</td>
            <td>0980808808</td>
            <td>54 Đào Tấn - Ba Đình - Hà Nội</td>
            <td>32432423442</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Công ty TNHH GHJ</td>
            <td>abc@gmail.com</td>
            <td>0980808808</td>
            <td>54 Đào Tấn - Ba Đình - Hà Nội</td>
            <td>32432423442</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Công ty TNHH ĐFF</td>
            <td>abc@gmail.com</td>
            <td>0980808808</td>
            <td>54 Đào Tấn - Ba Đình - Hà Nội</td>
            <td>32432423442</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
      </tbody>
    </table>
   
</div>
@endsection
