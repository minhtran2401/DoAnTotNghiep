<!--Block 06: Products-->
<div class="Product-box sm-margin-top-96px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="advance-product-box">
                    <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                        <h3 class="title">Giảm giá giờ vàng</h3>
                    </div>
                    <ul class="products biolife-carousel nav-top-right nav-none-on-mobile" data-slick='{"arrows":true, "dots":false, "infinite":false, "speed":400, "slidesMargin":30, "slidesToShow":1}'>
                        @foreach ($tabsaletime as $sale)
                        <li class="product-item">
                            <div class="contain-product deal-layout contain-product__deal-layout">
                                <div class="product-thumb">
                                <a href="{{route('singleproduct',$sale->slug_sp)}}" class="link-to-product">
                                    <img src="{{asset('hinhsp')}}/{{$sale->img_sp}}" alt="dd" width="330" height="330" class="product-thumnail">
                                    </a>
                                    <div class="labels">
                                        <?php
                                            // $phantram = ceil(($sale->price_sp / $sale->old_price_sp ) * 10) ;
                                            $phantram = ceil(100 - (100 * ($sale->price_sp / $sale->old_price_sp ))) ;

                                          
                                        ?>
                                        <span class="sale-label">- {{$phantram}} %</span>
                                    </div>
                                </div>
                                <div class="info">
                                <div class="biolife-countdown" data-datetime="{{$sale->time_discount}}"></div>
                                <b class="categories">{{$sale->name_loaisp}}</b>
                                <h4 class="product-title"><a href="{{route('singleproduct',$sale->slug_sp)}}" class="pr-name">{{$sale->name_sp}}</a></h4>
                                    <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($sale->price_sp)}} đ / {{$sale->name_donvi}}</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($sale->old_price_sp)}} đ</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">Tất cả sản phẩm đều đã qua kiểm duyệt.</p>
                                        <div class="buttons">
                                          
                                            <a href="javascript:0" onclick="AddCart({{$sale->id_sanpham}})" class="btn add-to-cart-btn">Thêm Vào Giỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="advance-product-box">
                    <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                        <h3 class="title">Sản Phẩm Đang Giảm Giá</h3>
                    </div>
                    <ul class="products biolife-carousel nav-center-03 nav-none-on-mobile row-space-29px" data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":992, "settings":{ "rows":2, "slidesToShow": 1}},{"breakpoint":768, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":500, "settings":{ "rows":2, "slidesToShow": 1}}]}'>
                        @foreach ($tabsale as $sale)
                            
                     
                        <li class="product-item">
                            <div class="contain-product right-info-layout contain-product__right-info-layout">
                                <div class="product-thumb">
                                    <a href="{{route('singleproduct',$sale->slug_sp)}}" class="link-to-product">
                                    <img src="{{asset('hinhsp')}}/{{$sale->img_sp}}" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                <b class="categories">{{$sale->name_loaisp}}</b>
                                <h4 class="product-title"><a href="{{route('singleproduct',$sale->slug_sp)}}" class="pr-name">{{$sale->name_sp}} </a></h4>
                                    <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($sale->price_sp)}} đ / {{$sale->name_donvi}}</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($sale->old_price_sp)}} đ</span></del>
                                    </div>
       
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    <div class="biolife-banner style-01 biolife-banner__style-01 sm-margin-top-30px xs-margin-top-80px">
                        <div class="banner-contain">
                            <a href="#" class="bn-link"></a>
                            <div class="text-content">
                                <span class="first-line">Thực Phẩm Hằng Ngày</span>
                                <b class="second-line">Tự nhiên</b>
                                <i class="third-line">Hợp Vệ Sinh</i>
                                <span class="fourth-line">Chất lượng tiêu chuẩn</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>