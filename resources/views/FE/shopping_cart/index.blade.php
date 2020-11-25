@extends('FE.layouts.layout')
@section('title','Giỏ hàng của tôi')


<!-- breadrum -->
@section('breadrum')
    @include('FE.shopping_cart.breadrum')
@endsection

@section('main')
    <div class="page-contain shopping-cart">
        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">
                <!-- shoppingcart content -->
                @include('FE.shopping_cart.shoppingCartContent')
                <!-- related products -->
                @include('FE.shopping_cart.relatedProducts')
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
  <script src="{{asset('FE')}}/assets/js/customs_js/cart_js.js"></script>
    <script src="{{asset('FE')}}/assets/js/customs_js/search_js.js"></script>
<script>
    function DeleteItemListCart(id){
        $.ajax({
            url: 'Delete-Item-List-Cart/'+id,
            type: 'GET',
        }).done(function(response){
            $("#change-item-cart").load('me-nu #change-item-cart');
            $("#render").load('me-nu #render');
            // $('#total-price-cart').load('me-nu #total-price-cart');
            RenderListCart(response);
            Toast.fire({
                icon: 'success',
                title: 'Đã xóa sản phẩm',
              })
        });

    }


    function SaveListItemCart(id){
            $.ajax({
                url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                type: 'GET',
            }).done(function(response) {
                $("#change-item-cart").load('me-nu #change-item-cart');
            $("#render").load('me-nu #render');
                RenderListCart(response);
               
                Toast.fire({
                icon: 'success',
                title: 'Đã cập nhật sản phẩm',
              })
            });
            
        }


        function RenderListCart(response){
        $("#total-quanty-show").text($("#total-quanty-cart").val());
        $("#change-item-list-cart").empty();
        $("#change-item-list-cart").html(response);
    }

    $(".edit-all").on("click", function(){
       
        var lists = [];
        $("table tbody tr td").each(function(){
            $(this).find("input").each(function(){
                var element = {key: $(this).data("id"), value: $(this).val()};
                lists.push(element);
            });
        });
        $.ajax({
            url: 'Save-All',
            type: 'POST',
            data:{
                "_token" : "{{ csrf_token() }}" ,
                "data" : lists
            }
        }).done(function(responsive){
            Toast.fire({
                icon: 'success',
                title: 'Đã cập nhật giỏ hàng',
              })
              setTimeout(function(){
                location.reload();
            $('#biof-loading').fadeOut();
            },1000);
            
        });
      
    });
</script>

<script>
    $(".delete-all-cart").on("click", function(){
        $.ajax({
            url: 'Del-All',
            type: 'POST',
            data:{
                "_token" : "{{ csrf_token() }}" ,
            }
        }).done(function(responsive){
            Toast.fire({
                icon: 'success',
                title: 'Đã xóa hết sản phẩm',
              })
              setTimeout(function(){
                location.reload();
            $('#biof-loading').fadeOut();
            },1000);
            
        });
    });
</script>
@endsection