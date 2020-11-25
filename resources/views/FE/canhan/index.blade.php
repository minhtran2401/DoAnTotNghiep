@extends('FE.layouts.layout')
@section('title','Thông tin tài khoản')


@section('breadrum')
    <!--Hero Section-->
    {{-- <div class="hero-section hero-background">
        <h1 class="page-title">Thông tin tài khoản</h1>
    </div> --}}

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Thông tin tài khoản</span></li>
            </ul>
        </nav>
    </div>
@endsection

@section('main')

<div style="margin-bottom: 15px" class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container m-5 p-3">
            <div class="shpcart-subtotal-block">
                <div class="subtotal-line">
                    <b class="stt-name">Quản lý đơn hàng <span class="sub">({{count($lich_su_mua_hang)}})</span></b>
                    <p class="buttons" style="float: right;">
                    <a href="{{route('canhan_donhang')}}" class="btn btn-bold">Tất cả đơn hàng</a>
                    </p>
                </div>
                    <table class="shop_table cart-form">
                        <thead>
                            <tr>
                                <th class="product-name">Mã Đơn Hàng</th>
                                <th class="product-price">Ngày Đặt</th>
                                <th class="product-quantity">Tổng Tiền</th>
                                <th class="product-subtotal">Tình Trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @forelse ($lich_su_mua_hang->take(3) as $ls)
                            <tr>
                            <th scope="row"># {{$ls->id_donhang}}</th>
                            <td>{{date('d-m-Y ', strtotime($ls->created_at))}}</td>
                            <td>{{number_format($ls->tongtien_donhang)}} đ</td>
                           
                            <td> @php
                                $id_tinhtrang =$ls->id_tinhtrang;
                                $ltt = App\TinhTrangHD::find($id_tinhtrang);
                                echo $ltt->name_tinhtrang;
                                @endphp</td>
                              </tr>
                              @empty
                              <tr>
                                <td colspan="4"> Không có đơn hàng nào</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
            </div>

            <div class="shpcart-subtotal-block">
            <form method="POST" action="{{route('update_info',Auth::user()->id)}}">
                    @csrf
                    <div class="subtotal-line">
                        <b class="stt-name">Thông tin tài khoản</b>
                        <p class="buttons" style="float: right;">
                            @if(!Auth::user()->provider))
                        <a href="{{route('dmk')}}" class="btn btn-bold">Đổi mật khẩu</a>
                            @else
                            @endif
                        </p>
                    </div>
                        <div class="-6">
                        Tên: <input class="form-control m-1" type="text" name="name" value="{{Auth::user()->name}}" placeholder="Tên người dùng" class="txt-input">
                        @foreach($errors->get('name') as $error)
                        <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach 
                        <br>
                        Email <small><i>(*Nhập địa chỉ email chính xác để có thể nhận thông báo khi bạn đặt hàng thành công)</i></small>
                         <input disabled class="form-control m-1" type="tel" name="email" value="{{Auth::user()->email}}" placeholder="Email" class="txt-input">
                        @foreach($errors->get('email') as $error)
                        <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                            <br>
                        Số điện thoại:<input class="form-control m-1" type="phone" name="phone" value="{{Auth::user()->phone}}" placeholder="Số điện thoại" class="txt-input">
                        @foreach($errors->get('phone') as $error)
                        <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach    
                        <br>
                            <button class="btn btn-bold" type="submit">Lưu cập nhật</button>
                        </div>
                </form>
            </div>

            {{-- <div class="shpcart-subtotal-block">
                <form>
                    <div class="subtotal-line">
                        <b class="stt-name">Thông tin giao nhận</b>
                    </div>
                    <hr>
                    <div class="">
                        <p><b>Địa chỉ: </b>CVPM Quang Trung, Q.12, TP HCM</p>
                        <p><b>Số điện thoại: </b>09032681682</p>
                    </div>
                        
                </form>
            </div> --}}
        </div>
    </div>
</div>
@endsection