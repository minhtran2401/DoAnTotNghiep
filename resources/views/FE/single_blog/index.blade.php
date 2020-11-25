@extends('FE.layouts.layout')
@section('title','Chi tiết Blog')

<!-- breadrum -->
@section('breadrum')
@include('FE.single_blog.breadrum')
@endsection

@section('main')
<!-- Page Contain -->
<div class="page-contain blog-page left-sidebar">
    <div class="container">
        <div class="row">
            <!-- Left sidebar -->
            @include('FE.single_blog.leftSidebar')
            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <!-- single blog content -->
                @include('FE.single_blog.b1_singleBlogContent')
                <!-- comment blog -->
                @include('FE.single_blog.b2_commentBlog')
            </div>
        </div>
    </div>
</div>
@endsection