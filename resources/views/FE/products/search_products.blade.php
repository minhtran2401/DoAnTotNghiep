@extends('FE.layouts.layout')

@section('title','Tìm kiếm sản phẩm')

@section('main')
@section('breadrum')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Sản Phẩm Của GreenFresh</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Kết quả tìm kiếm</span></li>
            </ul>
        </nav>
    </div>
@endsection
<div class="page-contain category-page left-sidebar">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('FE.products.leftSidebar')
            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <!-- Sản Phẩm Mới Nhất -->
                <div class="product-category grid-style">
                    <div style="margin-bottom: 15px" class="header">
                    </div>
                    <div class="row">
                        <ul class="products-list">
                            @forelse ($ketquatim as $val)
                                <li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                    <a href="{{ route('singleproduct', $val->slug_sp) }}" class="link-to-product">
                                            <img src="{{asset('')}}/hinhsp/{{ $val->img_sp }}" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="{{ route('singleproduct', $val->slug_sp) }}" class="pr-name">{{ Str::limit($val->name_sp, 20) }}</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol"></span>{{ number_format($val->price_sp) }} đ</span></ins>
                                            @if($val->old_price_sp)
                                            <del><span class="price-amount"><span class="currencySymbol"></span>{{ number_format($val->old_price_sp) }} đ</span></del>
                                            @endif
                                        </div>
                                        @if($val->old_price_sp)
                                        <div class="shipping-info">
                                            <p class="shipping-day">Đang giảm giá</p>
                                            <p class="for-today">Mua ngay hôm nay</p>
                                        </div>
                                        
                                        @endif
                                        <div class="slide-down-box">
                                            <p class="message">Tất cả sản phẩm đều đã qua kiểm duyệt .</p>
                                            <div class="buttons">
                                            <a href="javascript:0" onclick="AddCart({{$val->id_sanpham}})" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <i>Không có sản phẩm theo từ khóa vừa tìm ...</i>
                            </li>

                            @endforelse
                            

                        </ul>
                    </div>
                    <!-- Paginate of new products-->
                    <div class="biolife-panigations-block">
                        <ul class="panigation-contain">
                            <li>{!! $ketquatim->links() !!}</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection