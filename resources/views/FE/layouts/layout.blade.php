<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:app_id" content="800406244111382"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!--!-->
    @yield('meta')
    <title>@yield('title','GreenFresh')</title>
    <link href="https://fonts.googleapis.com/css?family=KoHo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('FE')}}/assets/images/favicon.png" />
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/slick.min.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('FE')}}/assets/css/main-color03-green.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<style>
  #loadingg
{
	text-align:center; 
	background: url("{{asset('FE')}}/assets/images/loader.gif") no-repeat center; 
  animation-duration: 1s;
  animation-delay: unset;
  animation-name: loadsort;
	height: 150px;
}
@keyframes loadsort{
  from{
    opacity: 1;
  }
  to{
    opacity: 0;
  }
}
</style>


</head>
<body class="biolife-body">
  <div class="zalo-chat-widget" data-oaid="3409370780368281520" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>

{{-- <script src="https://sp.zalo.me/plugins/sdk.js"></script> --}}
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src =   "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=800406244111382";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div id="fb-root"></div>


<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="107936394446991"
theme_color="#7faf51"
logged_in_greeting="Xin chào ! Bạn cần trợ giúp gì ?"
logged_out_greeting="Xin chào ! Bạn cần trợ giúp gì ?">
</div>

    @include('FE.layouts.header')


    @yield('breadrum')

    <!-- Page Contain -->
    <div class="page-contain">

       @yield('main')
       
           
    </div>


    @include('FE.layouts.footer')
    @include('sweetalert::alert')
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
    <script src="{{asset('FE')}}/assets/js/jquery-3.4.1.min.js"></script>
    <script src="{{asset('FE')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('FE')}}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{asset('FE')}}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('FE')}}/assets/js/jquery.nicescroll.min.js"></script>
    <script src="{{asset('FE')}}/assets/js/slick.min.js"></script>
    <script src="{{asset('FE')}}/assets/js/biolife.framework.js"></script>
    <script src="{{asset('FE')}}/assets/js/functions.js"></script>
    <script src="{{asset('FE')}}/assets/js/jquery-ui.js"></script>


    <script src="{{asset('FE')}}/assets/js/typeahead.bundle.min.js"></script>

    {{-- <script src="{{asset('FE')}}/assets/js/customs_js/cart_js.js"></script> --}}
    <script src="{{asset('FE')}}/assets/js/customs_js/form_js.js"></script>
    <script src="{{asset('FE')}}/assets/js/customs_js/search_js.js"></script>

    @yield('js')
   

    <script>
      const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    grow:'row',
    width:'250px',
    padding:'2.5rem',
    // background:'#7faf51',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    },

       
  })
// JavaScript Cart:
    function AddCart(id){
        $.ajax({
            url: '{{route('index')}}/Add-Cart/'+id,
            type: 'GET',
        }).done(function(res) {
        RenderCart(res);
            Toast.fire({
                icon: 'success',
                title: 'Đã thêm sản phẩm vào giỏ',
              })
        });
      
    }


    $("#change-item-cart").on("click", ".remove i" , function(){
        $.ajax({
            url: '{{route('index')}}/Delete-Item-Cart/'+$(this).data("id"),
            type: 'GET',
        }).done(function(res) {
            RenderCart(res);
            $("#change-item-list-cart").load('gio-hang .shopping-cart-container');
            
            Toast.fire({
                icon: 'error',
                title: 'Đã xóa sản phẩm'
              })
        });

    });
   
  function RenderCart(res){
    $("#total-quanty-show").text($("#total-quanty-cart").val());
        $("#change-item-cart").empty();
        $("#render").empty();
        $("#change-item-cart").html(res);
    
  }

  
  $(".edit-all").on("click", function(){
    console.log('clicked');

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
        location.reload();
    });
  
});
    </script>

    <script>
     $(document).ready(function () {
       $.get('{{route('index')}}/api/status-web').then(function (response) {
         if (response.status == 1) {
           truee();
         }
       });
 
     })
 
     function thongbao() {
       
  Swal.fire({
 icon: 'error',
 title: 'Bị chặn',
 text: 'Hãy mua hàng như một vị khách bình thường , Cảm ơn ♥',
 footer: '<a href = {{route('contact')}}>Có thắc mắc? Hãy liên hệ để được hỗ trợ !</a>',
 confirmButtonText:
    '<i class="fa fa-thumbs-up"></i> Đồng Ý',
 })
 
       }
 
   function truee() {
 
     $(window).on('keydown',function(event)
   {
   if(event.keyCode==123)
   {
     thongbao();
       return false;
   }
   else if(event.ctrlKey && event.shiftKey && event.keyCode==73 )
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+i
   }
   else if(event.ctrlKey && event.keyCode==73)
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+i
   }
   else if(event.ctrlKey && event.shiftKey && event.keyCode==67 )
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+c
   }
   else if(event.ctrlKey && event.keyCode==67)
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+c
   }
   else if(event.ctrlKey && event.shiftKey && event.keyCode==85 )
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+u
   }
   else if(event.ctrlKey && event.keyCode==85)
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+u
   }
   else if(event.ctrlKey && event.shiftKey && event.keyCode==74 )
   {        thongbao();
 
       return false;  //Prevent from ctrl+shift+j
   }
   else if(event.ctrlKey && event.shiftKey && event.keyCode==83 )
   {        thongbao();
 
       return false;  //Prevent from ctrl+shift+j
   }
   else if(event.ctrlKey && event.shiftKey && event.keyCode==70 )
   {        thongbao();
 
       return false;  //Prevent from ctrl+shift+j
   }
   else if(event.ctrlKey && event.keyCode==74)
   {      thongbao();
 
       return false;  //Prevent from ctrl+shift+j
   }
 });
 $(document).on("contextmenu",function(e)
 {
 e.preventDefault();
 });
   }
   </script>

<!-- cust JavaScript -->
</body>

</html>
