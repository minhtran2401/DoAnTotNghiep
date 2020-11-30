@extends('FE.layouts.layout')
@section('title','Thanh toán')


@section('breadrum')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Hóa đơn và thanh toán</span></li>
            </ul>
        </nav>
    </div>
@endsection

@section('main')

<div style="margin-bottom: 15px" class="page-contain checkout">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container sm-margin-top-37px">
            <div class="row">
                @if(Session::has('Cart') != null)
                <!--checkout progress box-->
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="checkout-progress-wrap">
                        <ul class="steps">
                            <li class="step 1st">
                                <div class="checkout-act active">
                                    <h3  class="title-box "><span class="number">$</span>Hóa Đơn Và Thanh Toán</h3>
                                    <div class="box-content">
                                        @if (Auth::guest())
                                    <p class="txt-desc"> <a class="link-forward" href="{{route('login')}}">Đăng nhập</a>
                                            để có thể xem lại lịch sử mua hàng.</p>
                                        @else
                                        @endif
                                        @if ($errors->any())
                                        <div style="color:red" class="">
                                            <ul>
                                               <li>Hãy nhập đầy đủ thông tin trước khi gửi đi .</li>
                                            </ul>
                                        </div>
                                    @endif
                                        <div class="login-on-checkout">
                                        <form action="{{route('thanhtoan')}}"  method="post">
                                           @csrf
                                                <p class="form-row col-md-12 row">
                                                    @if (! Auth::user())
                                                
                                                  
                                                    <div class=" col-md-12 mb-5" >
                                                    <label for="input_email"><b> Địa Chỉ Email </b></label>
                                                    <input  class="form-control" type="email" name="email_nguoinhan" id="input_email" value=""
                                                        placeholder="Email của bạn">  
                                                    </div>
                                                  
                                                    @else
                                                    <div class=" col-md-12 mb-5" hidden>
                                                        <label for="input_email"><b> Địa Chỉ Email </b></label>
                                                        <input  class="form-control" type="email" name="email_nguoinhan"  value="{{ Auth::user()->email }}"
                                                            placeholder="Email của bạn">  
                                                        </div>
                                                    @endif
                                                  

                                                    <div class=" col-md-12 mb-5" >
                                                        <label  for="input_email"><b> Tên Người Nhận </b> </label>
                                                        <input  class="form-control" type="text" name="name_nguoinhan"  value=""
                                                            placeholder="Tên bạn">  
                                                    </div>

                                                    <div class=" col-md-12 mb-5" >
                                                        <label  for="input_email"><b> Số điện thoại </b> </label>
                                                        <input  class="form-control" type="text" name="sdt_nguoinhan" value=""
                                                            placeholder="Số Điện Thoại">  
                                                    </div>

                                                    <div class=" col-md-12 mb-5" >
                                                        <label  for="input_email"><b> Địa chỉ giao hàng </b></label>
                                                        <input  class="form-control" type="text" name="diachi"  value=""
                                                            placeholder="Địa chỉ giao hàng">  
                                                    </div>
                                                    
                                                    <div class=" col-md-12 mb-5" >
                                                        <label  for="input_email"><b> Ghi chú đơn hàng </b></label>
                                                        <textarea class="form-control" placeholder="Vd: Gọi cho tôi trước khi giao hàng,..." name="ghichu_donhang"  cols="30" rows="10"></textarea>
                                                    </div>
                                                    @if(Auth::user())
                                                    <input hidden type="text" name="id" value="{{ Auth::user()->id }}">
                                                    @else
                                                    <input  type="text" name="id" value="0" hidden>
                                                    @endif
                                                      
                                                    <div class="col-md-12 mb-5">
                                                        <label  for="input_email"><b> Phương thức thanh toán </b></label>
                                                        <div class="custom-control custom-radio">
                                                          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                                          <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" disabled required="">
                                                          <label class="custom-control-label" for="debit">Ví điện tử Momo ( Chưa hỗ trợ )</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" disabled required="">
                                                          <label class="custom-control-label" for="paypal">Chuyển khoản ngân hàng ( Chưa hỗ trợ ) </label>
                                                        </div>
                                                      </div>

                                                      <p class="form-row">
                                                        <button onclick="dangxuli()" style="float: right"  class="btn btn-submit" type="submit">Gửi</button>
                                                    </p>
                                                </p>
                                               
                                                
                                                
                                         
                                        </div>
                                    </div>
                                </div>
                            </li>
                      
                        </ul>
                    </div>
                </div>
               
                <!--Order Summary-->
                <div
                    class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                    <div class="order-summary sm-margin-bottom-80px">
                        <div class="title-block">
                            <h3 class="title">Chi tiết hóa đơn</h3>
                        <a href="{{route('shoppingcart')}}" class="link-forward">Chỉnh sửa giỏ hàng</a>
                        </div>
                     
                      
                        <div class="cart-list-box short-type">
                            <span  class="number">{{Session::get("Cart")->totalQuanty}} sản phẩm</span>
                            <ul class="cart-list">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                      <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                          <button class="btn btn-link" style="color: #7faf51" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Danh sách sản phẩm trong giỏ hàng.
                                          </button>
                                        </h2>
                                      </div>
                                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        @foreach(Session::get('Cart')->products as $item)

                                        <li class="cart-elem">
                                            <div class="cart-item">
                                                <div class="product-thumb">
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img src="{{ asset('hinhsp') }}/{{$item['productInfo']->img_sp}}" width="113"
                                                                height="113" alt="shop-cart"></figure>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <span name="soluongsp" class="txt-quantity">{{$item['quanty']}} x {{$item['productInfo']->name_donvi}}</span>
                                                    <a href="#"  class="pr-name">{{$item['productInfo']->name_sp}}</a>
                                                   
                                                </div>
                                                <input hidden type="text" value="{{$item['productInfo']->id_sanpham}}" name="id_sanpham">
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol"></span name="tongtiensp"> {{number_format($item['price'])}} đ</span></ins>
                                                                @if($item['productInfo']->old_price_sp)
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol"></span name="tongtiensp">{{number_format($item['productInfo']->old_price_sp)}}đ</span></del>
                                                                @else
                                                                @endif
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                       {{-- @php
                                       dd(Session::get("Cart"))
                                       @endphp --}}
                                      </div>
                                    </div>
                              
                                    

                                  </div>
                                
                            </ul>
                            <ul class="subtotal">
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Tạm Tính</b>
                                    <span class="stt-price">{{number_format(Session::get('Cart')->totalPrice)}} đ</span>
                                    </div>
                                </li>
                                @if(Session::has("Cart") != null && Session::get('coupon')  )
                                @foreach(Session::get('coupon') as $key => $cou)
                                @if($cou['counpon_type']==0)
                                @php
                                $total_coupon = (Session::get('Cart')->totalPrice*$cou['counpon_number'])/100;
                                $total_price_then = (Session::get('Cart')->totalPrice - $total_coupon);
                                @endphp
                                <li>
                                    <div class="subtotal-line">
                                        <a class="link-forward">Đã áp dụng mã giảm giá <b style="color: black">{{$cou['counpon_code']}}</b></a>
                                        <span class="stt-price">- {{number_format($total_coupon)}} đ</span>
                                    </div>
                                </li>
                               
                                <li>
                                    <div class="subtotal-line">
                                    <a  class="link-forward">Hóa đơn chưa bao gồm phí vận chuyển.*</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Tổng Cộng</b>
                                        <span class="stt-price">{{number_format($total_price_then)}} đ</span>
                                    </div>
                                </li>
                                @elseif($cou['counpon_type']==1)
                                @php
                                $total_coupon =  $cou['counpon_number'];
                                $total_price_then = (Session::get('Cart')->totalPrice - $total_coupon);
                                @endphp
                                <li>
                                    <div class="subtotal-line">
                                        <a class="link-forward">Đã áp dụng mã giảm giá <b style="color: black">{{$cou['counpon_code']}}</b></a>
                                        <span class="stt-price">- {{number_format($total_coupon)}} đ</span>
                                    </div>
                                </li>
                               
                                <li>
                                    <div class="subtotal-line">
                                    <a  class="link-forward">Hóa đơn chưa bao gồm phí vận chuyển.*</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Tổng Cộng</b>
                                        <span class="stt-price">{{number_format($total_price_then)}} đ</span>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                                @else
                                <li>
                                    <div class="subtotal-line">
                                    <a style="color: black" class="link-forward">Bạn có mã giảm giá không ? <a class="link-forward" href="{{route('shoppingcart')}}"> Sử dụng ngay ! </a> </a>
                                    
                                    <a  class="link-forward">Hóa đơn chưa bao gồm phí vận chuyển.*</a>
                                    </div>
                                 
                                </li>
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Tổng Cộng</b>
                                        <span class="stt-price">{{number_format(Session::get('Cart')->totalPrice)}}</span>
                                    </div>
                                </li>
                                @endif
                                @if(Session::has("Cart") != null && Session::get('coupon')  )
                                <input hidden  type="text" name="tongtien_donhang" value="{{$total_price_then}}">
                                @elseif(Session::has("Cart") != null)
                                <input hidden type="text" name="tongtien_donhang" value="{{Session::get('Cart')->totalPrice}}">
                                @else
                                @endif

                            </form>
                            </ul>
                        </div>
                    </div>
                </div>
               
                @else
            <div style="text-align: center; margin-bottom:50px" >Chưa có sản phẩm trong giỏ hàng !! <a style="color:#7faf51" href="{{route('index')}}"> Mua ngay !</a></div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    function dangxuli(){
        let timerInterval
Swal.fire({
  title: 'Đang xử lí',
  showConfirmButton:false,
  timer: 5500,
  timerProgressBar: true,
  willOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
   
  }
})
    }
</script>
@endsection