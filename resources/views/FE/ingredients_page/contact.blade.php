@extends('FE.layouts.layout')
@section('title','GreenFresh | Liên Hệ')
@section('main')
<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">LIÊN HỆ</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav nav-86px">
        <ul>
        <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
            <li class="nav-item"><span class="current-page">Liên hệ</span></li>
        </ul>
    </nav>
</div>

<!-- Main Content -->
<div class="page-contain contact-us">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="wrap-map biolife-wrap-map" id="map-block">
            <iframe
                    width="1920"
                    height="591"
        src="{{$info->googlemap}}"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0">
            </iframe>
        </div>

        <div class="container">

            <div class="row">

                <!--Contact info-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                        <h4 class="box-title">Thông tin liên hệ</h4>
                        <p class="frst-desc">Nếu khách hàng có thắc mắc hoặc muốn trở thành đối tác của chúng tôi, hãy liên hệ theo thông tin bên dưới.</p>
                        <ul class="addr-info">
                            <li>
                                <div class="if-item">
                                    <b class="tie">Địa chỉ:</b>
                                <p class="dsc">{{$info->address}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Số điện thoại:</b>
                                <p class="dsc">{{$info->contactphone}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Email:</b>
                                <p class="dsc">{{$info->contactemail}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Giờ mở cửa:</b>
                                    <p class="dsc">8.30am - 7.30pm, T2 - T7</p>
                                </div>
                            </li>
                        </ul>
                        <div class="biolife-social inline">
                            <ul class="socials">
                                <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Contact form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-container sm-margin-top-112px">
                    <form autocomplete="off" method="POST" id="form_contact" action="{{ url('phan-hoi-thong-tin-lien-he') }}" name="frm-contact" >
                            {{ csrf_field() }}
                            <p class="form-row">
                                <input type="text" name="name" value="" placeholder="Tên của bạn" class="txt-input">
                            </p>
                            <p class="form-row">
                                <input type="email" name="email" value="" placeholder="Địa chỉ email" class="txt-input">
                            </p>
                            <p class="form-row">
                                <input type="tel" name="phone" value="" placeholder="Số điện thoại" class="txt-input">
                            </p>
                            <p class="form-row">
                                <textarea name="mes" id="mes-1" cols="30" rows="9" placeholder="Nội dung liên hệ"></textarea>
                            </p>
                            <p class="form-row">
                                <button  class="btn btn-submit" type="submit">Gửi</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection