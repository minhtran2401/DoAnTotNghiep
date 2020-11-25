<!--Block 04: Banner Promotion 01-->
<div class="banner-promotion-01 xs-margin-top-50px sm-margin-top-70px">
    <div class="biolife-banner promotion3 biolife-banner__promotion3 green-style">
        <div class="banner-contain">
            <div class="media">
                <div class="img-moving position-1">
                    <img src="{{asset('FE')}}/assets/images/home-03/img-moving-pst-1-geen.png" width="149" height="139" alt="img msv">
                </div>
            </div>
            <div class="text-content">
                <div class="container text-wrap">
                    <span class="first-line">Rau Quả Tuần Này</span>
                    @if($banner3)
                <b class="second-line">{{$banner3->name_sp}}</b>
                <p class="third-line">{{$banner3->mota_quangcao}}</p>
                    <div class="product-detail">
                    <p class="txt-price"><span>Giá chỉ còn: </span>{{number_format($banner3->price_sp)}} đ</p>
                        <a href="javascript:0" onclick="AddCart({{$banner3->id_sanpham}})" class="btn add-to-cart-btn">Thêm Vào Giỏ</a>
                    @else
                    
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>