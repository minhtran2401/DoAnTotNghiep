<!-- related products -->
<div class="product-related-box single-layout">
    <div class="biolife-title-box lg-margin-bottom-26px-im">
        <span class="biolife-icon icon-organic"></span>
        <span class="subtitle">Lựa Chọn Tốt Nhất Cho Bạn</span>
        <h3 class="main-title">SẢN PHẨM LIÊN QUAN</h3>
    </div>
    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>

        @foreach ($splq as $lq)
        <li class="product-item">
            <div class="contain-product layout-default">
                <div class="product-thumb">
                    <a href="{{route('singleproduct',$lq->slug_sp)}}" class="link-to-product">
                    <img src="{{ asset('hinhsp') }}/{{$lq->img_sp}}" alt="dd" width="270" height="270"
                            class="product-thumnail">
                    </a>
                </div>
                <div class="info">
                    <b class="categories">{{$lq->name_loaisp}}</b>
                <h4 class="product-title"><a href="{{route('singleproduct',$lq->slug_sp)}}" class="pr-name">{{$lq->name_sp}}</a></h4>
                    <div class="price">
                        <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($lq->price_sp)}} đ</span></ins>
                        @if($lq->old_price_sp)
                        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($lq->old_price_sp)}} đ</span></del>
                        @endif
                    </div>
                    <div class="slide-down-box">
                        <p class="message">Tất cả sản phẩm đều đã qua kiểm định, đảm bảo an toàn cho sức khỏe.
                        </p>
                        <div class="buttons">
                            <a href="javascript:0" onclick="AddCart({{$lq->id_sanpham}})" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                    aria-hidden="true"></i>Thêm Giỏ Hàng</a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </li>
 @endforeach

    </ul>
</div>