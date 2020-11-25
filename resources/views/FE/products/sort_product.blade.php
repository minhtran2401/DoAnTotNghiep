@extends('FE.layouts.layout')

@section('title','Tìm kiếm sản phẩm')
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
@section('main')
@section('main')
<div class="page-contain category-page no-sidebar">
    <div class="container">
        <div class="row">

  {{-- @include('FE.products.b1_hotProducts') --}}
           <!-- All products -->
<div class="product-category grid-style">

    <div id="top-functions-area" class="top-functions-area">
        <div class="flt-item to-left group-on-mobile">
            <span class="flt-title">Lọc Sản Phẩm</span>
            <a href="#" class="icon-for-mobile">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="wrap-selectors">
            <form action="{{route('indexFiltering')}}" name="frm-refine" value="" method="get">
                    <span class="title-for-mobile">Lọc Sản Phẩm</span>
                    <div data-title="Price:" class="selector-item">
                        <select name="price" class="selector">
                            <option value="all"></option>
                            
                            {{-- {{-- <option value="class-1st">Less than 5$</option> --}}
                            <option value="class-2nd">$5-10$</option>
                            <option value="class-3rd">$10-20$</option>
                            <option value="class-4th">$20-45$</option>
                            <option value="class-5th">$45-100$</option>
                            <option value="class-6th">$100-150$</option>
                            <option value="class-7th">More than 150$</option> --}}
                        </select>
                    </div>
                    <div data-title="Brand:" class="selector-item">
                        <select name="brad" class="selector">
                            <option value="all">Thương hiệu</option>
                            <option value="br2">Brand first</option>
                            <option value="br3">Brand second</option>
                            <option value="br4">Brand third</option>
                            <option value="br5">Brand fourth</option>
                            <option value="br6">Brand fiveth</option>
                        </select>
                    </div>
                    <div data-title="Avalability:" class="selector-item">
                        <select name="ability" class="selector">
                            <option value="all">Loại</option>
                            <option value="vl2">Availability 1</option>
                            <option value="vl3">Availability 2</option>
                            <option value="vl4">Availability 3</option>
                            <option value="vl5">Availability 4</option>
                            <option value="vl6">Availability 5</option>
                        </select>
                    </div>
                    <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                </form>
            </div>
        </div>
        <div class="flt-item to-right">
            <span class="flt-title">Sort</span>
            <div class="wrap-selectors">
                <div class="selector-item orderby-selector">
                    <select name="orderby" class="orderby" aria-label="Shop order">
                        <option value="menu_order" selected="selected">@sortablelink('price_sp', 'Price')</option>
                        <option value="popularity">popularity</option>
                        <option value="rating">average rating</option>
                        <option value="date">newness</option>
                        <option value="price">price: low to high</option>
                        <option value="price-desc">price: high to low</option>
                    </select>
                </div>
              
            </div>
        </div>
    </div>

    <div class="row">
        <ul class="products-list">
            @foreach ($productsort as $p)
            <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="contain-product layout-default">
                    <div class="product-thumb">
                        <a  href="{{route('singleproduct',$p->slug_sp)}}" class="link-to-product">
                            <img src="{{ asset('hinhsp') }}/{{$p->img_sp}}" alt="dd" width="270" height="270"
                                class="product-thumnail">
                        </a>
                    </div>
                    <div class="info">
                        <b class="categories">{{$p->name_loaisp}}</b>
                    <h4 class="product-title"><a href="{{route('singleproduct',$p->slug_sp)}}" class="pr-name">{{ Str::limit($p->name_sp, 20) }}</a></h4>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($p->price_sp)}} đ</span></ins>
                           
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">Sản Phẩm Mới</p>
                            <p class="for-today">Mua ngay hôm nay</p>
                        </div>
                        <div class="slide-down-box">
                            <p class="message">Tất cả sản phẩm đều đã được kiểm duyệt</p>
                            <div class="buttons">
                             
                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                        aria-hidden="true"></i>thêm vào giỏ</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>

    <div class="biolife-panigations-block">
        <ul class="panigation-contain">
            <li>{!! $productsort->links() !!}</li>

           
        </ul>
    </div>

</div>
        </div>
    </div>
</div>
@endsection


