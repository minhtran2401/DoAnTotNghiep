@extends('FE.layouts.layout')
@if ( isset($type_blog) && $type_blog === "all-blog" )
@section('title','BLOG MỚI NHẤT ')
<!-- breadrum -->

@section('main')
<!-- Page Contain -->
<div class="page-contain blog-page left-sidebar">
    <div class="container">
        <div class="row">
         
            @include('FE.blog.allBlog')
         
        </div>
    </div>
</div>
@endsection
@else
    @section('title',"BLOG THEO THỂ LOẠI | $cate_blog->name_loaiblog")
    <!-- breadrum -->
    @section('breadrum')
        @include('FE.blog.breadrum')
    @endsection
    @section('main')
    <!-- Page Contain -->
    <div class="page-contain blog-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- leftSidebar -->
                @include('FE.blog.leftSidebar')
                <!-- Blog main content -->
                @include('FE.blog.blogByfilter')
            </div>
        </div>
    </div>
    @endsection
    @endif
