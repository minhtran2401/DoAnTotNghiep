<div class="row">
    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
    <a href="{{route('index')}}" class="biolife-logo"><img src="{{asset('siteinfo')}}/{{$info->sitelogo}}" alt="biolife logo" width="135" height="36"></a>
    </div>
    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
        <div class="primary-menu">
            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
            <li class="menu-item"><a href="{{route('index')}}">Trang Chủ</a></li>
                <li class="menu-item menu-item-has-children has-megamenu">
                    <a href="{{route('allprod')}}" class="menu-name" data-title="Shop" >Sản Phẩm</a>
                    <div class="wrap-megamenu lg-width-900 md-width-750">
                        <div class="mega-content">
                            @foreach ($getgroup as $g)
                                
                          
                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                <div class="wrap-custom-menu vertical-menu">
                                <h4 class="menu-title">{{$g->name_nhomsp}}</h4>
                                    <ul class="menu">
                                        <?php
                                       $loaisp = App\NhomSanPham::find($g->id_nhomsp)->ktloaisp;
                                        ?>
                                        @foreach ($loaisp as $loai)
                                     <li><a href="{{route('cateprod',$loai->slug_loaisp)}}">{{$loai->name_loaisp}}</a></li>                                  
                                        @endforeach  
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                          

                        </div>
                    </div>
                </li>

                <li class="menu-item menu-item-has-children has-megamenu">
                <a href="{{route('allblog')}}" class="menu-name" data-title="Blog">Blog</a>
                    <div class="wrap-megamenu lg-width-800 md-width-750">
                        <div class="mega-content">
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="wrap-custom-menu vertical-menu">
                                    <h4 class="menu-title">Danh Mục Blog</h4>
                                    <ul class="menu">
                                       @foreach ($countblogz as $b)
                                        <li><a href="{{route('cateblog',$b->slug_loaiblog)}}">{{$b->name_loaiblog}}  ({{$b->ktblog_count}})</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="wrap-custom-menu vertical-menu">
                                    <h4 class="menu-title">Blog Nổi Bật</h4>
                                    <ul class="menu">
                                       @foreach ($bloghot as $hot)
                                    <li><a href="{{route('singleblog',$hot->slug_blog)}}">{{$hot->name_blog}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 md-margin-top-0 xs-margin-top-25px">
                                <div class="block-posts">
                                    <h4 class="menu-title">Blog Mới Nhất</h4>
                                    <ul class="posts">
                                        @foreach ($blognew as $bn)
                                        <li>
                                            <div class="block-post-item">
                                            <div class="thumb"><a href="{{route('singleblog',$bn->slug_blog)}}"><img src="{{asset('imgblog')}}/{{$bn->img_blog}}" width="100" height="73" alt=""></a></div>
                                                <div class="left-info">
                                                <h4 class="post-name"><a href="{{route('singleblog',$bn->slug_blog)}}">{{$bn->name_loaiblog}} : {{$bn->name_blog}}</a></h4>
                                                    <span class="p-date">{{date("d-m-Y", strtotime($bn->time_blog))}}</span>
                                                    <span class="p-comment">{{$bn->luotxem}} Lượt xem</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- @if (Auth::guest())
                <li class="menu-item menu-item-has-children has-child"><a href="javascript:0">Tài Khoản</a>
                    <ul class="sub-menu">  
                    <li class="menu-item"><a href="{{route('dang-nhap')}}">Đăng Nhập</a></li>
                    <li class="menu-item"><a href="{{route('dang-ki')}}">Đăng Kí</a></li>  
                    <li class="menu-item"><a href="">Quên Mật Khẩu</a></li>
                    <li class="menu-item"><a href="{{route('shoppingcart')}}">Giỏ Hàng</a></li>
                    <li class="menu-item"><a href="{{route('canhan_donhang')}}">Lịch Sử Mua Hàng</a></li>     
                    </ul>
                </li>
                @else
            <li class="menu-item"><a href="{{route('canhan')}}">Tài Khoản</a> 
                </li>
                @endif --}}
                <li class="menu-item menu-item-has-children has-child"><a href="#">Tuyển Dụng</a>
                    <ul class="sub-menu">
                        @foreach ($tuyendung as $t)
                    <li class="menu-item"><a href="{{route('tuyendung',$t->id_tuyendung)}}">{{$t->name_tuyendung}}</a></li>
                          @endforeach
                    </ul>
                </li>
              
            <li class="menu-item"><a href="{{route('contact')}}">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
        <div class="biolife-cart-info">
            <div class="mobile-search">
                <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                <div class="mobile-search-content">
                    <form action="{{ route('searchsp')}}" class="form-search typeahead" role="search" name="mobile-seacrh" method="GET">
                        <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                        <input type="search" name="q" id="seachsp" class="form-control " placeholder="Tìm kiếm..." autocomplete="off">
                        <select name="category">
                            <option value="0" selected>Tất cả danh mục</option>
                            @foreach ($menuloaisp as $l)
                        <option value="{{$l->id_loaisp}}">{{$l->name_loaisp}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn-submit">Tìm</button>
                    </form>
                </div>
            </div>
          
            <div class="minicart-block">
                <div class="minicart-contain">
                    <div id="render">
                    <a href="javascript:void(0)" class="link-to">
                        <span class="icon-qty-combine">
                            <i class="icon-cart-mini biolife-icon" ></i>
                            @if(Session::has("Cart") != null)
                            <span class="qty" id="total-quanty-cart">{{Session::get("Cart")->totalQuanty}}</span>
                        @else
                            <span class="qty" id="total-quanty-cart">0</span>
                        @endif
                         
                        </span>
                        <span class="title">Giỏ Hàng : </span>
                        @if(Session::has("Cart") != null)
                        <span id="total-price-cart" class="sub-total">{{number_format(Session::get('Cart')->totalPrice)}} đ</span>
                        @else
                        <span id="total-price-cart" class="sub-total">0 đ</span>
                        @endif
                    </div>
                    </a>
                    <div id="change-item-cart">
                    <div class="cart-content">
                        <div class="cart-inner">
                          
                     <ul class="products">        
                              
                                    @if(Session::has("Cart") != null)
                                    @foreach(Session::get('Cart')->products as $item)
                                            <li> 
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src="{{asset('hinhsp')}}/{{$item['productInfo']->img_sp}}" width="90" height="90"  ></a>
                                                    </div>
                                                    <div class="left-info">
                                                    <div class="product-title"><a href="{{route('singleproduct',$item['productInfo']->slug_sp)}}" class="product-name">{{$item['productInfo']->name_sp}}</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item['productInfo']->price_sp)}} đ</span></ins>
                                                            {{-- <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del> --}}
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id123][qty]">Số lượng:</label>
                                                            <input type="number" class="input-qty"  value="{{$item['quanty']}}" disabled >
                                                        <label style="margin-left: -70px" > : {{$item['productInfo']->name_donvi}}</label>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="action">
                                                        
                                                        <a  class="remove"><i class="fa fa-trash-o" data-id="{{$item['productInfo']->id_sanpham}}" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                       
                            </ul>
                        
                            @if(Session::has("Cart") != null)
                            <p class="btn-control">
                            <a href="{{route('shoppingcart')}}" class="btn view-cart">Giỏ Hàng</a>
                            <a href="{{route('checkout')}}" class="btn">Thanh Toán</a>
                            </p>
                            @else
                            <p class="minicart-empty">Chưa có sản phẩm trong giỏ hàng</p></div>
                            @endif
                        </div>
                    </div>


                </div>
            </div>

            </div>
            <div class="mobile-menu-toggle">
                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</div>

