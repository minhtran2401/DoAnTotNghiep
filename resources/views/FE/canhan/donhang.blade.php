@extends('FE.layouts.layout')
@section('title','Lịch sử mua hàng')


@section('breadrum')
    <!--Hero Section-->
    {{-- <div class="hero-section hero-background">
        <h1 class="page-title">Đổi mật khẩu</h1>
    </div> --}}

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
            <li class="nav-item"><a href="{{route('canhan')}}" class="permal-link">Thông tin cá nhân</a></li>
                <li class="nav-item"><span class="current-page">Danh sách đơn hàng đã mua</span></li>
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
                <form>
                    <div class="subtotal-line">
                        <b class="stt-name">Đơn hàng của bạn</b>
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

                           @forelse ($lich_su_don_hang as $ls)
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
                </form>
            </div>
        </div>
        <div class="biolife-panigations-block">
            <ul class="panigation-contain">
                <li>{!! $lich_su_don_hang->links() !!}</li>
    
               
            </ul>
        </div>
    </div>
</div>
@endsection