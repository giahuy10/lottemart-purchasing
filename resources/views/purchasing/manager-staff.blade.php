@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Quản lý nhân viên</h3>
    <button class="btn btn-success">Thêm nhân viên mới</button>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Stt</th>
          <th>Tên nhân viên</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>Nguyễn Văn A</td>
            <td>abc@gmail.com</td>
            <td>0980808808</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nguyễn Văn B</td>
            <td>abc@gmail.com</td>
            <td>0980808808</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nguyễn Văn C</td>
            <td>abc@gmail.com</td>
            <td>0980808808</td>
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
      </tbody>
    </table>
   
</div>
@endsection
