@extends('FE.layouts.layout')
@section('title',$sp->name_sp)
@section('meta')
<meta property="fb:app_id" content="800406244111382"/>
@endsection

<!-- breadrum -->
@section('breadrum')
@include('FE.single_product.breadrum')
@endsection

@section('main')
<div class="page-contain single-product">
    <div class="container">
        <!-- Main content -->
        <div id="main-content" class="main-content">
            <!-- summary info -->
            @include('FE.single_product.b1_summaryInfo')
            <!-- tab info -->
            @include('FE.single_product.b2_tabInfo')
            <!-- related products -->
            @include('FE.single_product.b3_relatedProducts')
        </div>
    </div>
</div>
@endsection

@section('js')
 <!-- JavaScript -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
 <!-- CSS -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
 <!-- Default theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
 <!-- Semantic UI theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
 <!-- Bootstrap theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

 <!-- JavaScript Customs -->
 <script src="{{asset('FE')}}/assets/js/customs_js/cart_js.js"></script>
 <script src="{{asset('FE')}}/assets/js/customs_js/search_js.js"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 
 <script>
         function AddCartDetail(){
        document.getElementById("sendqty").click();
    }
    $(document).ready( function() {
        $("#qtysp").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                 type: "POST",
                 url: url,
                 data: form.serialize(),
            }).done(function(response) {
                RenderCart(response);
                alertify.success('Đã thêm sản phẩm vào giỏ');
            });
        });
    })
 </script>

 <script>
     $(document).ready(function()
{
    $("#input-1").attr('maxlength','3');
});
 </script>

@endsection