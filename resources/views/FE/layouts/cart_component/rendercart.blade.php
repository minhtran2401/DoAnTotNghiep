<div class="minicart-block">
    <div class="minicart-contain">
        <div id="render">
        <a href="javascript:void(0)" class="link-to">
            <span class="icon-qty-combine">
                <i class="icon-cart-mini biolife-icon"></i>
                @if(Session::has("Cart") != null)
                <span class="qty" id="total-quanty-cart">{{Session::get("Cart")->totalQuanty}}</span>
            @else
                <span class="qty" id="total-quanty-cart">0</span>
            @endif
             
            </span>
            <span class="title">Giỏ Hàng : </span>
            @if(Session::has("Cart") != null)
            <span class="sub-total">{{number_format(Session::get('Cart')->totalPrice)}} đ</span>
            @else
            <span class="sub-total">0 đ</span>
            @endif
        </a>
    </div>

        <div class="cart-content">
            <div class="cart-inner">
                        
         <ul class="products"> 
            
                        @if(Session::has("Cart") != null)
                        @foreach(Session::get('Cart')->products as $item)
                                 
                                    <li>
                                    <div class="minicart-item">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('hinhsp')}}/{{$item['productInfo']->img_sp}}" width="90px" height="90px" alt="National Fresh"></a>
                                        </div>
                                        <div class="left-info">
                                            <div class="product-title"><a href="{{route('singleproduct',$item['productInfo']->slug_sp)}}" class="product-name">{{$item['productInfo']->name_sp}}</a></div>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item['productInfo']->price_sp)}} đ</span></ins>
                                                {{-- <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del> --}}
                                            </div>
                                            <div class="qty">
                                                <label for="cart[id123][qty]">Số lượng:</label>
                                                <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]" value="{{$item['quanty']}}" disabled>
                                                <label style="margin-left: -70px" > : {{$item['productInfo']->name_donvi}}</label>
                                            </div>
                                        </div>
                                        <div class="action">
                                            
                                            <a  class="remove"><i class="fa fa-trash-o" data-id="{{$item['productInfo']->id_sanpham}}" aria-hidden="true"></i></a>
                                        </div>
                                    </div> 
                                </li>
                            
                                @endforeach
                                @endif
                         
                </ul>
          
                @if(Session::has("Cart") != null)
                <p class="btn-control">
                <a href="{{route('shoppingcart')}}" class="btn view-cart">Giỏ Hàng</a>
                <a href="{{route('checkout')}}" class="btn">Thanh Toán</a>
                </p>
                @else
                <p class="minicart-empty">Chưa có sản phẩm trong giỏ hàng</p></div>
                @endif
            </div>
        </div>


  
</div>