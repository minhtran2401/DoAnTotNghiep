@extends('FE.layouts.layout')
@section('title','Quên Mật Khẩu')
    
@section('breadrum')
<div class="hero-section hero-background">
<h1 class="page-title">QUÊN MẬT KHẨU</h1>
</div>

<div class="container">
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{asset('/')}}" class="permal-link">Trang Chủ</a></li>
            <li class="nav-item"><span class="current-page">Quên Mật Khẩu</span></li>
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4" for="password">Địa Chỉ Email :<span class="requite">*</span></label>
                            <div class="form-row col-md-8">
                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="txt-input  @error('email') is-invalid @enderror" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-submit btn-bold"">
                                    {{ __('Lấy Lại Mật Khẩu') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
