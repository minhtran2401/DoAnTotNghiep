@extends('FE.layouts.layout')
@section('title','TRANG CHỦ | GreenFresh')

@section('main')
<!-- Main content -->
<div id="main-content" class="main-content">
    <!--Block 01: Main Slide-->
    @include('FE.home.b1_mainSlide')
    <!--Block 02: Banners-->
    @include('FE.home.b2_banners')
    <!--Block 03: Product Tabs-->
    @include('FE.home.b3_productTab')
    <!--Block 04: Banner Promotion 01-->
    @include('FE.home.b4_bannerPromotion_1')
    <!--Block 05: Banner promotion 02-->
    @include('FE.home.b5_bannerPromotion_2')
    <!--Block 06: Products-->
    @include('FE.home.b6_products')
    <!--Block 07: Brands-->
    @include('FE.home.b7_brands')
    <!--Block 08: Blog Posts-->
    @include('FE.home.b8_blogPosts')
</div>

@endsection

@section('js')
<script src="{{asset('FE')}}/assets/js/slick.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function () {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $(document).on('click','.btn_call_quickview', function (e){
            e.preventDefault();
            var id = $(this).data('id');
            // console.log(id);
            $.ajax({
              url: "{{route('getinfo',"")}}/"+id,
              method: 'GET',
              data: {id: id,
            
              },
              success: function (kq) {
            
                $('#biolife-quickview-block').empty();
                $('#biolife-quickview-block').html(kq);
               
              }

            })
          });
        });
      </script>


@endsection