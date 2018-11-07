@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Thông tin báo giá từ các nhà cung cấp</h3>
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
    <h4>Danh sách hàng báo giá</h4>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th rowspan="2">Stt</th>
          <th rowspan="2">Tên sản phẩm</th>
          <th rowspan="2">ĐVT</th>
          <th rowspan="2">Số lượng</th>
         
          <th class="text-center" colspan="2">Vendor 1</th>
          <th class="text-center" colspan="2">Vendor 2</th>
          <th class="text-center" colspan="2">Vendor 3</th>
          
        </tr>
        <tr>
         
         
          <th>Giá(VND)</th>
          <th>Thành tiền</th>
          <th>Giá(VND)</th>
          <th>Thành tiền</th>
          <th>Giá(VND)</th>
          <th>Thành tiền</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>
            Bánh gạo
          </td>
          <td>
            Thùng
          </td>
          <td>
            4
          </td>
        
          <td>
             16.000
          </td>
          <td>
             64.000
          </td>
          <td class="text-success text-bold">
             15.000
          </td>
          <td  class="text-success text-bold">
             60.000
          </td>
          <td>
             16.000
          </td>
          <td>
             64.000
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            Gạo tám hải hậu
          </td>
          <td>
            Kg
          </td>
          <td>
            100
          </td>
          
          <td>
             160.000
          </td>
          <td>
             16.000.000
          </td>
          <td>
             165.000
          </td>
          <td>
             16.5000.000
          </td>
          <td class="text-success text-bold">
             150.000
          </td>
          <td class="text-success text-bold">
             15.000.000
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            Nước mắm 500ml
          </td>
          <td>
            Chai
          </td>
          <td>
            200
          </td>
          
          <td>
             16.000
          </td>
          <td>
             3.200.000
          </td>
          <td class="text-success text-bold">
             15.000
          </td>
          <td class="text-success text-bold">
             3.000.000
          </td>
          <td>
             16.000
          </td>
          <td>
             3.200.000
          </td>
        </tr>
        <tr>
          <td colspan="5"><b>Tổng</b></td>
          <td>19.264.000</td>
          <td></td>
          <td>18.560.000</td>
          <td></td>
          <td class="text-success text-bold">18.264.000</td>
        </tr>
      </tbody>
    </table>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
      <label class="custom-control-label" for="customRadioInline1">Vendor 1</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
      <label class="custom-control-label" for="customRadioInline2">Vendor 2</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input checked type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
      <label class="custom-control-label" for="customRadioInline3">Vendor 3</label>
    </div>
    <br>
    <br>
    <a class="btn btn-success btn-lg" href="">Duyệt</a>
</div>
@endsection
