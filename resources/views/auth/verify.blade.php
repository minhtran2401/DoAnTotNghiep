@extends('FE.layouts.layout')
@section('title','Xác thực email')
    
@section('breadrum')
<div class="hero-section hero-background">
<h1 class="page-title">Xác thực email</h1>
</div>

<div class="container">
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{asset('/')}}" class="permal-link">Trang Chủ</a></li>
            <li class="nav-item"><span class="current-page">Xác thực địa chỉ email</span></li>
        </ul>
    </nav>
</div>
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Chúng tôi đã gửi link xác thực mới vào email của bạn, hãy kiểm tra.') }}
                        </div>
                    @endif

                    {{ __('Để thực hiện thao tác này, bạn cần xác thực email trước,') }}
                    {{ __('Nếu bạn không nhận được email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click vào đây để gửi yêu cầu xác thực mới .') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
