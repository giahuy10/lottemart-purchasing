@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Quản lý loại sản phẩm</h3>
    <button class="btn btn-success">Thêm loại sản phẩm mới</button>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Stt</th>
          <th>Tên loại</th>
        
          <th></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>Thực phẩm tươi sống</td>
           
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Thực phẩm khô</td>
            
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Bánh kẹo</td>
           
            <td><i class="fa fa-pencil text-primary"></i> <i class="fa fa-close text-danger"></i></td>
          </tr>
      </tbody>
    </table>
   
</div>
@endsection
