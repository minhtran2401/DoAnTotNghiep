@extends('FE.layouts.layout')
@section('title','Đăng Nhập')
    
@section('breadrum')
<div class="hero-section hero-background">
<h1 class="page-title">ĐĂNG NHẬP</h1>
</div>

<div class="container">
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{asset('/')}}" class="permal-link">Trang Chủ</a></li>
            <li class="nav-item"><span class="current-page">Đăng Nhập</span></li>
        </ul>
    </nav>
</div>
@endsection
@section('main')
<div class="page-contain login-page">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">

            <div class="row">

                <!--Form Sign In-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="signin-container">
                       
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <p class="form-row">
                                <label for="email">Email:<span class="requite">*</span></label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="txt-input  @error('email') is-invalid @enderror" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" name="email" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </p>
                            <p class="form-row">
                                <label for="password">Mật Khẩu:<span class="requite">*</span></label>
                                <input type="password" id="password" name="password" autocomplete="current-password" class="txt-input  @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </p>
                            <p class="form-row wrap-btn">
                                <button class="btn btn-submit btn-bold" type="submit">Đăng Nhập</button>
                                @if (Route::has('password.request'))
                                <a class="link-to-help" href="{{ route('password.request') }}">
                                    {{ __('Quên Mật Khẩu ?') }}
                                </a>
                            @endif
                                
                            </p>
                        </form>
                        <div class="form-row wrap-btn" >
                            {{ __('Hoặc đăng nhập với') }}
                        <a href="{{route('re-fblogin','facebook')}}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
                      

                        </div>
                    </div>
                </div>

                <!--Go to Register form-->
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
                <a href="{{route('dang-ki')}}" class="btn btn-bold">Tạo Tài Khoản</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection