<!--Block 03: Product Tabs-->
<div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
    <div class="container">
        <div class="biolife-title-box">
            <span class="subtitle">Lựa Chọn Tốt Nhất Cho Bạn</span>
        <h3 class="main-title">Sản Phẩm Mới Nhất</h3>
        </div>
        <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
            <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                    
                    @foreach ($tab as $t)
                    @if($t->id_nhomsp==1)
                    <li class="tab-element active ">
                    @else   
                    <li class="tab-element ">
                    @endif

                     
                    <a href="#{{$t->slug_nhomsp}}" class="tab-link"><span class="biolife-icon icon-{{$t->hinh_nhomsp}}"></span>{{$t->name_nhomsp}}</a>

                    </li>
                    @endforeach
                  
                </ul>
            </div>
            <div class="tab-content">

                @foreach ($tab as $t)
                @if($t->id_nhomsp==1)
                <div id="{{$t->slug_nhomsp}}" class="tab-contain active">
                @else   
                <div id="{{$t->slug_nhomsp}}" class="tab-contain ">
                @endif

                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                        <?php
                            $products = App\NhomSanPham::find($t->id_nhomsp)->ktsp()->join('donvitinh','donvitinh.id_donvitinh','sanpham.id_donvitinh')
                            ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
                            ->join('khohang','khohang.sku','sanpham.sku')
                            ->where('sanpham.Anhien',1)->where('sanpham.sp_khuyenmai','=' ,0)->orderby('id_sanpham','desc')
                            ->get();
                         ?>
                      
                        @foreach ($products as $pr)
                        <li  class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="{{route('singleproduct',$pr->slug_sp)}}" class="link-to-product">
                                    <img src="{{asset('hinhsp')}}/{{$pr->img_sp}}" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a data-id="{{ $pr->id_sanpham }}" class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                <b class="categories">{{$pr->name_nhomsp}}</b>
                                <b class="categories">{{$pr->name_loaisp}}</b>
                                <h4 class="product-title"><a href="{{route('singleproduct',$pr->slug_sp)}}" class="pr-name">{{$pr->name_sp}}</a></h4>
                                    <div class="price ">
                                    <ins><span class="price-amount">{{number_format($pr->price_sp)}} đ / {{$pr->name_donvi}}</span></ins>
                                    @if($pr->old_price_sp != null)
                                    <del><span class="price-amount">{{number_format($pr->old_price_sp)}} đ</span></del>
                                    @endif
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">Tất cả sản phẩm đều đã qua kiểm duyệt, đảm bảo hợp vệ sinh.</p>
                                        <div class="buttons">
                                            @if($pr->khohang_soluong < 5)
                                            <a href="javascript:0" disabled class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Tạm Hết Hàng</a>
                                            @else
                                            <a href="javascript:0" onclick="AddCart({{$pr->id_sanpham}})" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm Vào Giỏ</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                            
                        @endforeach

                       
                     
                    </ul>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>