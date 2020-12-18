<!-- Sản phẩm giảm giá -->
<div style="margin-bottom: 15px" class="header">
    Sản Phẩm Đang Giảm Giá
</div>
<div class="block-item recently-products-cat md-margin-bottom-39">
    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}' >
        <li class="product-item">
            <div class="contain-product layout-02">

                @forelse ($sale_pro as $s)
                <div class="product-thumb">
                    <a href="{{route('singleproduct',$s->slug_sp)}}" class="link-to-product">
                    <img src="{{asset('hinhsp')}}/{{$s->img_sp}}" alt="dd" width="270" height="270" class="product-thumnail">
                    </a>
                </div>
                <div class="info">
                <b class="categories">{{$s->name_loaisp}}</b>
                <h4 class="product-title"><a href="{{route('singleproduct',$s->slug_sp)}}" class="pr-name">{{$s->name_sp}}</a></h4>
                    <div class="price">
                    <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($s->price_sp)}} đ</span></ins>
                        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($s->old_price_sp)}} đ</span></del>
                    </div>
                </div>
                @empty
                    <i>Không có sản phẩm...</i>
                @endforelse

              


            </div>
        </li>

    </ul>
</div>