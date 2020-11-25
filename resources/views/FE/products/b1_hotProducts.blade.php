<!-- Sale products -->
<div class="block-item recently-products-cat md-margin-bottom-39">
    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
        @foreach ($productsalepage as $p)
            
      
        <li class="product-item">
            <div class="contain-product layout-02">
                <div class="product-thumb">
                    <a href="{{route('singleproduct',$p->slug_sp)}}" class="link-to-product">
                        <img src="{{ asset('hinhsp') }}/{{$p->img_sp}}" alt="dd" width="270" height="270"
                            class="product-thumnail">
                    </a>
                </div>
                <div class="info">
                <b class="categories">{{$p->name_loaisp}}</b>
                <h4 class="product-title"><a href="{{route('singleproduct',$p->slug_sp)}}" class="pr-name">{{ Str::limit($p->name_sp, 20) }}</a></h4>
                    <div class="price">
                        <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($p->price_sp)}} đ</span></ins>
                        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($p->old_price_sp)}} đ</span></del>
                    </div>
                </div>
            </div>
        </li>
  @endforeach
    </ul>
</div>