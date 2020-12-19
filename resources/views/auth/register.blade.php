{{-- @php
        $url_redirect = route('index');
			header( "refresh:5;url=$url_redirect" );
			@endphp --}}
@extends('FE.layouts.layout')
@section('title','Đăng Kí Tài Khoản')
    
@section('breadrum')
<div class="hero-section hero-background">
<h1 class="page-title">ĐĂNG KÍ</h1>
</div>

<div class="container">
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{asset('/')}}" class="permal-link">Trang Chủ</a></li>
            <li class="nav-item"><span class="current-page">Đăng Kí Tài Khoản</span></li>
        </ul>
    </nav>
</div>
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            @if(session()->get('ok'))
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Thông báo!</h4>
              {{ session()->get('ok') }}
            </div>
            @endif
           


            <div class="signin-container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                    <p class="form-row col-md-6">
                        <label for="name">Họ Và Tên : <span class="requite">*</span></label>
                        <input type="text" id="name" name="name" class="txt-input @error('name') is-invalid @enderror" value="{{ old('name') }}"  autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                    <p class="form-row col-md-6">
                        <label for="address">Địa Chỉ : <span class="requite">*</span></label>
                        <input type="text" id="address" name="address"  class="txt-input @error('address') is-invalid @enderror" value="{{ old('address') }}"  autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                </div>
                <div class="row">
                    <p class="form-row col-md-6 ">
                        <label for="phone">Số Điện Thoại : <span class="requite">*</span></label>
                        <input type="text" id="phone" name="phone" class="txt-input @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  autocomplete="phone">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                    <p class="form-row col-md-6">
                        <label for="email">Địa Chỉ Email : <span class="requite">*</span></label>
                        <input type="text" id="email" name="email"   class="txt-input @error('email') is-invalid @enderror" value="{{ old('email') }}"  autocomplete="email" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                </div>
                <div class="row">
                    <p class="form-row col-md-6">
                        <label for="pass">Mật Khẩu :<span class="requite">*</span></label>
                        <input type="password" id="pass" name="password" class="txt-input @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </p>
                    <p class="form-row col-md-6">
                        <label for="password-confirm">Nhập Lại Mật Khẩu : <span class="requite">*</span></label>
                        <input id="password-confirm" type="password" class="txt-input" name="password_confirmation"  autocomplete="new-password">
                    </p>
                </div>
                    <p class="form-row wrap-btn">
                        <button  class="btn btn-submit btn-bold " type="submit">Đăng Kí</button>
                     
                    </p>
                    
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="register-in-container">
                <div class="intro">
                    <h4 class="box-title">ƯU ĐÃI KHI LÀ KHÁCH HÀNG MỚI ?</h4>
                    <p class="sub-title">Đăng kí tài khoản sẽ nhận ngày ưu đãi của chúng tôi:</p>
                    <ul class="lis">
                        <li>Miễn phí ship trong bán kính 2km</li>
                        <li>Nhận ngay mã giảm giá 50% cho đơn hàng đầu tiên</li>
                        <li>Quà tặng kèm độc đáo</li>
                        <li>Hỗ trợ 24/7</li>
                      
                    </ul>
              <a href="{{route('dang-nhap')}}">  <div class="btn btn-bold">  Đã có tài khoản </div> </a> 

                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection

@section('js')
        {{-- <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<script>
    document.getElementById("dangki").addEventListener("click", function() {
        alertify.success('Success message');
    });
    </script> --}}
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

@endsection
