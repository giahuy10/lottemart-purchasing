@extends('layouts.app')

@section('content')
<div class="container text-center dashboard">
    <h2>Dành cho quản lý</h2>
    <div class="row">
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-manager-staff')}}">
                <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="">
            </a>
            <h3>Quản lý nhân viên</h3>
        </div>
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-manager-vendor')}}">
                <img src="https://user-images.githubusercontent.com/32214822/40359569-db8ad30c-5de0-11e8-873a-22816ab73c38.png" alt="">
            </a>
            <h3>Quản lý nhà cung cấp</h3>
        </div>
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-manager')}}">
            <img src="https://png.pngtree.com/element_origin_min_pic/00/00/07/2657972044430ac.jpg" alt="">
            </a>
            <h3>Quản lý mua hàng</h3>
        </div>
    </div>
    <h2>Dành cho nhân viên</h2>
    <div class="row">
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-staff-category')}}">
                <img src="https://cdn.icon-icons.com/icons2/20/PNG/256/business_inventory_maintenance_product_box_boxes_2326.png" alt="">
            </a>
            <h3>Quản lý loại sản phẩm</h3>
        </div>
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-staff-product')}}">
                <img src="https://tickera-wpsalad.netdna-ssl.com/wp-content/themes/tickera/style/img/freebies/icons/events/3.png" alt="">
            </a>
            <h3>Quản lý sản phẩm</h3>
        </div>
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-staff')}}">
                <img src="https://png.pngtree.com/element_origin_min_pic/00/00/07/2657972044430ac.jpg" alt="">
            </a>
            <h3>Quản lý mua hàng</h3>
        </div>
    </div>
    <h2>Dành cho nhà cung cấp</h2>
    <div class="row">
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-vendor')}}">
            <img src="http://icons.iconarchive.com/icons/icons8/ios7/256/Finance-Purchase-Order-icon.png" alt="">
            </a>
            <h3>Quản lý báo giá</h3>
        </div>
        <div class="col-12 col-md-4">
            <a href="{{route('purchasing-vendor-order')}}">
            <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/check-order-612795.png" alt="">
            </a>
            <h3>Quản lý đơn hàng</h3>
        </div>
       
    </div>
</div>
@endsection
