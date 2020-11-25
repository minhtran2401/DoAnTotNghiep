<!--Block 02: Banners-->
<div class="special-slide">
    <div class="container">
        <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "autoplaySpeed":600, "autoplay": true, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
           @foreach ($bannersaleoff as $bns)
            <li>
                <div class="slide-contain biolife-banner__special">
                    <div class="banner-contain">
                        <div class="media">
                            <a href="#" class="bn-link">
                            <figure><img  src="{{asset('bannerquangcao')}}/{{$bns->banner_quangcao}}" width="616" height="483" alt=""></figure>
                            </a>
                        </div>
                        <div class="text-content">
                        <b class="first-line">{{$bns->name_loaisp}}</b>
                            <span class="second-line">Sản Phẩm Ở GreenFresh</span>
                            <span class="third-line"> <i>Sạch, tốt cho sức khỏe</i></span>
                            <div class="product-detail">
                            <h4 class="product-name">{{$bns->name_sp}}</h4>
                                <div class="price price-contain">
                                <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($bns->price_sp)}} đ</span></ins>
                                <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($bns->old_price_sp)}} đ</span></del>
                                </div>
                                <div class="buttons">
                                    <a href="javascript:0" onclick="AddCart({{$bns->id_sanpham}})" class="btn add-to-cart-btn"></i>Thêm Vào Giỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
            <b class="txt-show-01" >100% Sạch</b>
            <i class="txt-show-02" >GreenFresh</i>
            <ul class="services-list">
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">1</span>
                        <span class="biolife-icon icon-beer"></span>
                        <a class="srv-name" >Sản Phẩm Đa Dạng</a>
                    </div>
                </li>
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">2</span>
                        <span class="biolife-icon icon-schedule"></span>
                        <a class="srv-name" >Đặt hàng mọi lúc mọi nơi</a>
                    </div>
                </li>
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">3</span>
                        <span class="biolife-icon icon-car"></span>
                        <a class="srv-name" >Giao hàng nội thành</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>