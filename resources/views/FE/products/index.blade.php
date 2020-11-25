@extends('FE.layouts.layout')

@if ( isset($type_product) && $type_product === "all-products" )
    @section('title','Sản Phẩm Mới')
    <!-- breadrum -->
    @section('breadrum')
        @include('FE.products.breadrum')
    @endsection
    @section('main')
    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">
                <!-- hot products -->
                @include('FE.products.b1_hotProducts')
                <!-- all products -->
                @include('FE.products.b1_allProducts')
            </div>
        </div>
    </div>
    @endsection
@else
    @section('title', "Danh Mục Sản Phẩm | $cate_pro->name_loaisp")
    <!-- breadrum -->
    @section('breadrum')
        @include('FE.products.breadrum')
    @endsection
    @section('main')
    <div class="page-contain category-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                @include('FE.products.leftSidebar')
                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    @include('FE.products.b2_saleProducts')
                    @include('FE.products.b3_newProducts')
                </div>
            </div>
        </div>
    </div> 
    @endsection
    
@endif
