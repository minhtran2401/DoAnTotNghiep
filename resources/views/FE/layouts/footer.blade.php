    <!-- FOOTER -->

    <footer id="footer" class="footer layout-03">
        <div class="footer-content background-footer-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-9">
                        <section class="footer-item">
                        <a href="home-03-green.html" class="logo footer-logo"><img src="{{asset('siteinfo')}}/{{$info->sitelogo}}" alt="biolife logo" width="135" height="36"></a>
                            <div class="footer-phone-info">
                                <i class="biolife-icon icon-head-phone"></i>
                                <p class="r-info">
                                    <span>Mọi thắc mắc liên hệ</span>
                                <span>{{$info->contactphone}} <br> {{$info->contactphone2}}</span>
                                </p>
                            </div>
                            <div class="newsletter-block layout-01">
                                <h4 class="title">Đăng Kí Nhận Thông Báo</h4>
                                <div class="form-content">
                                    <form method="POST" action="{{ route('send-email') }}" >
                                        {{csrf_field()}}

                                        <input name="email" type="email" class="input-text email {{ $errors->get('email') ? 'has-error' : '' }}" placeholder="Nhập Email để đăng kí " required >
                                        
                                        <button type="submit" class="bnt-submit">Đăng kí</button>
                                        @foreach($errors->get('email') as $error)
                                        
                                         <div style="font-size: 10pt;color:rgb(233, 67, 67);margin-top:10px">{{ $error }}</div>
                                        @endforeach
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">LIÊN KẾT THƯỜNG DÙNG</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="{{route('index')}}">Trang chủ</a></li>
                                            <li><a href="{{route('allprod')}}">Cửa Hàng</a></li>
                                            <li><a href="{{route('allblog')}}">Bài Viết</a></li>
                                            <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                            <li><a href="{{route('tuyendung','1')}}">Tuyển dụng</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            @php
                                            $nhomsp = App\NhomSanPham::orderby('id_nhomsp','desc')->get();
                                            @endphp
                                            @foreach ($nhomsp as $n)
                                            <li><a href="#">{{$n->name_nhomsp}}</a></li>

                                            @endforeach
                                            
                                        </ul>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">THÔNG TIN LIÊN HỆ</h3>
                            <div class="contact-info-block footer-layout xs-padding-top-10px">
                                <ul class="contact-lines">
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-location"></i>
                                        <b class="desc">{{$info->address}} <br> {{$info->address2}}</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-phone"></i>
                                            <b class="desc">{{$info->contactphone}}</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">{{$info->contactemail}}</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-clock"></i>
                                            <b class="desc">Thứ 2-6: 8:30am-7:30pm; Thứ 7-CN: 9:30am-4:30pm</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="http://fb.me/ereiai" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="separator sm-margin-top-62px xs-margin-top-40px"></div>
                    </div>
                    <div style="margin-bottom: 10px" class="col-lg-12 col-sm-12 col-xs-12 ">
                       <div class="copy-right-text text-center" ><p><a style="color: rgb(137, 209, 4)" href="">WD14308 - GreenFresh made with ♥</a></p></div>
                    </div>
                  
                </div>
            </div>
        </div>
    </footer>

    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Danh Mục</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
            <a class="link-to-cart" href="{{route('shoppingcart')}}">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Giỏ Hàng</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                    <span class="fa fa-globe"></span>
                    <span class="text">Tài Khoản</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Quản Lý</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">Tài Khoản</b>
                <ul class="list">
                    @if (Auth::guest())
                <li class="list-item"><a href="{{route('dang-nhap')}}">Đăng Nhập/ Đăng Ký</a></li>
                <li class="list-item"><a href="{{route('canhan_donhang')}}">Lịch Sử Mua Hàng <span class="index"></span></a></li>
                <li class="list-item"><a href="{{route('canhan')}}">Thông Tin Tài Khoản</a></li>
                <li class="list-item"><a href="{{route('dmk')}}">Đổi Mật Khẩu</a></li>
                @else
                <li class="list-item"><a href="{{route('canhan_donhang')}}">Lịch Sử Mua Hàng <span class="index"></span></a></li>
                <li class="list-item"><a href="{{route('canhan')}}">Thông Tin Tài Khoản</a></li>
                <li class="list-item"><a href="{{route('dmk')}}">Đổi Mật Khẩu</a></li>
                <li class="list-item"><a href="{{route('logout')}}">Đăng xuất</a></li>
                    @endif

                </ul>
            </div>
        
        </div>
    </div>

    <!--Quickview Popup-->
            
               <div id="biolife-quickview-block" class="biolife-quickview-block"> 
                   
               </div> 
 

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    