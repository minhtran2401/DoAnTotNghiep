<!--Related Product-->
<div class="product-related-box single-layout">
    <div class="biolife-title-box lg-margin-bottom-26px-im">
        <span class="biolife-icon icon-organic"></span>
        <span class="subtitle">Lựa Chọn Tốt Nhất Cho Bạn</span>
        <h3 class="main-title">Sản Phẩm Vừa Xem</h3>
    </div>
    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
      
        @if($recentlyViewed)
        @foreach ($recentlyViewed as $item) 
        <li class="product-item">
            <div class="contain-product layout-default">
                <div class="product-thumb">
                    <a href="{{route('singleproduct',$item->slug_sp)}}" class="link-to-product">
                        <img src="{{asset('hinhsp')}}/{{$item->img_sp}}" alt="dd" width="270" height="270"
                            class="product-thumnail">
                    </a>
                </div>
                <div class="info">
                    <b class="categories">@php
                        $id = $item->id_loaisp;
                        $tl = \App\LoaiSanPham::find($id);
                        echo $tl->name_loaisp;
                      @endphp</b>
                    <h4 class="product-title"><a href="#" class="pr-name"> {{$item->name_sp}}</a></h4>
                    <div class="price ">
                      
                        <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item->price_sp)}} đ</span></ins>
                        @if($item->old_price_sp)
                        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item->old_price_sp)}} đ</span></del>
                        @else
                        @endif
                    </div>
                    <div class="slide-down-box">
                        <p class="message">Tất cả sản phẩm của GreenFresh đều qua kiểm duyệt</p>
                        <div class="buttons">
                            @if($item->khohang_soluong < 5)
                            <a href="javascript:0" disabled class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Tạm Hết Hàng</a>
                            @else
                            <a href="javascript:0" onclick="AddCart({{$pr->id_sanpham}})" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm Vào Giỏ</a>
                            @endif
                            {{-- <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                    aria-hidden="true"></i>Thêm Vào Giỏ</a> --}}
                         
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        @else
        @endif
    </ul>
</div>