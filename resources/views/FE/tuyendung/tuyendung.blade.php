@extends('FE.layouts.layout')
@section('title','Tuyển dụng')


@section('breadrum')
    <!--Hero Section-->
    <div class="hero-section hero-background">
    <h1 class="page-title">{{$td->name_tuyendung}}</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Tuyển dụng</span></li>
            </ul>
        </nav>
    </div>
@endsection

@section('main')

<div style="margin-bottom: 15px" class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class=" container m-5 p-3">
                <div class="row p-3">
                    <img style="margin-bottom: 20px;" src="{{asset('FE/assets/images/tuyendung/banner-tuyendung.jpg')}}" alt="">
                        <div class=" col-md-8">
                            Green Fresh cần bạn
                        <h2><strong>{{$td->name_tuyendung}}</strong></h2>     
                           <div>
                               {!! $td->noidung_tuyendung !!}
                           </div>
                        </div>
                    </div>   
        </div>
    </div>
</div>
@endsection