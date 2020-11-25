@extends('FE.layouts.layout')
@section('title','Đổi mật khẩu')


@section('breadrum')
    <!--Hero Section-->
    {{-- <div class="hero-section hero-background">
        <h1 class="page-title">Đổi mật khẩu</h1>
    </div> --}}

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
            <li class="nav-item"><a href="{{route('canhan')}}" class="permal-link">Tài khoản</a></li>
                <li class="nav-item"><span class="current-page">Đổi mật khẩu</span></li>
            </ul>
        </nav>
    </div>
@endsection

@section('main')

<div style="margin-bottom: 15px" class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container m-5 p-3">
            <div class="shpcart-subtotal-block">
                <form action="{{route('postCredentials')}}" method="POSt" >
                    @csrf
                    <div class="subtotal-line">
                        <b class="stt-name">Đổi mật khẩu</b>
                    </div>
                        <div class="-6">
                            Mật khẩu cũ: <input class="form-control m-1" type="password" name="current-password" class="txt-input">
                            <br>
                            Mật khẩu mới: <input class="form-control m-1" type="password" name="password" class="txt-input">
                            <br>
                            Nhập lại mật khẩu mới:<input class="form-control m-1" type="password" name="password_confirmation" class="txt-input">
                            <br>
                            <button class="btn btn-bold" type="submit">Lưu Cập Nhật</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection