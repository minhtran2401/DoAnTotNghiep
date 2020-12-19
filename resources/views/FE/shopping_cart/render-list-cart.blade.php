<div class="row">
    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <h3 class="box-title">Giỏ Hàng Của Bạn</h3>
        <form class="shopping-cart-form" action="#" method="post">
            <table class="shop_table cart-form">
                <thead>
                    <tr>
                        <th class="product-name">Tên Sản Phẩm</th>
                        <th class="product-price">Giá Tiền</th>
                        <th class="product-quantity">Số Lượng</th>
                        <th class="product-subtotal">Tổng Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @if(Session::has('Cart') != null)
                    @foreach(Session::get('Cart')->products as $item)
                        <tr class="cart_item">
                            <td class="product-thumbnail" data-title="Product Name">
                                <a class="prd-thumb" href="{{route('singleproduct',$item['productInfo']->slug_sp)}}">
                                    <figure><img width="113" height="113" src="{{ asset('hinhsp') }}/{{$item['productInfo']->img_sp}}"
                                            alt="shipping cart"></figure>
                                </a>
                                <a class="prd-name" href="{{route('singleproduct',$item['productInfo']->slug_sp)}}">{{$item['productInfo']->name_sp}}</a>
                                <div class="action">
                                    <a href="javascript:0" onclick="SaveListItemCart({{$item['productInfo']->id_sanpham}});" class="edit"><i class="fa fa-pencil" aria-hidden="true"> </i> Lưu</a>
                                    <a href="javascript:0" onclick="DeleteItemListCart({{$item['productInfo']->id_sanpham}});" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
                                </div>
                            </td>
                            <td class="product-price" data-title="Price">
                                <div class="price price-contain">
                                    <ins><span class="price-amount"><span
                                                class="currencySymbol">{{number_format($item['productInfo']->price_sp)}}đ</ins>
                                                @if($item['productInfo']->old_price_sp)
                                    <del><span class="price-amount"><span
                                                class="currencySymbol"></span>{{number_format($item['productInfo']->old_price_sp)}}đ</span></del>
                                                @else
                                                @endif
                                </div>
                            </td>
                            <td class="product-quantity" data-title="Quantity">
                                <div class="quantity-box type1">
                                    <div class="qty-input">
                                        <input pattern="[0-9]{1,3}" data-id="{{$item['productInfo']->id_sanpham}}" id="quanty-item-{{$item['productInfo']->id_sanpham}}" type="text" value="{{$item['quanty']}}" name="qty12554"  data-max_value="20" data-min_value="1" data-step="1">
                                        <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></a>
                                        <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td class="product-subtotal" data-title="Total">
                                <div class="price price-contain">
                                    <ins><span class="price-amount"><span
                                                class="currencySymbol">
                                                
                                                {{number_format($item['price'])}} đ
                                                
                                            </ins>
                                                @if($item['productInfo']->old_price_sp)
                                                <del><span class="price-amount"><span
                                                class="currencySymbol"></span>{{number_format($item['productInfo']->old_price_sp)}}đ</span></del>
                                                @else
                                                @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr class="cart_item">
                        <td class="product-thumbnail" data-title="Product Name"> 
                        </td>
                        
                        <td class="product-quantity" data-title="Quantity">
                            <div class="quantity-box type1">
                               
                                <div>Chưa có sản phẩm nào trong giỏ hàng !!</div>
                            
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Total">
                            <div class="price price-contain">
                               
                            </div>
                        </td>
                    </tr>
                    @endif
                    <tr class="cart_item wrap-buttons">
                        <td class="wrap-btn-control" colspan="4">
                            <a href="{{route('index')}}" class="btn back-to-shop">Mua tiếp</a>
                            @if(Session::has("Cart") != null)
                            <a id="testtest" class="btn btn-update edit-all" >Cập Nhật</a>
                            <a class="btn btn-clear delete-all-cart" type="reset">xóa hết</a>
                            @else
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
        <div class="shpcart-subtotal-block">
            <div class="subtotal-line">
                @if(Session::has("Cart") != null)
                <b class="stt-name">Tổng <span class="sub">({{Session::get("Cart")->totalQuanty}} sản phẩm)</span></b>
               
                @else
                <b class="stt-name">Tổng <span class="sub">(chưa có sản phẩm)</span></b>
                @endif
                @if(Session::has("Cart") != null)
                @if(Session::has("Cart") != null && Session::get('coupon') )
                
                @foreach(Session::get('coupon') as $key => $cou)
                @if($cou['counpon_type']==0)
                @php
                $total_coupon = (Session::get('Cart')->totalPrice*$cou['counpon_number'])/100;
                $total_price_then = (Session::get('Cart')->totalPrice - $total_coupon);
                @endphp
                @elseif($cou['counpon_type']==1)
                @php
                $total_coupon = Session::get('Cart')->totalPrice - $cou['counpon_number'];
                $total_price_then = (Session::get('Cart')->totalPrice - $total_coupon);
                @endphp
                @else
                @endif
                @endforeach
                @if($cou['counpon_type']==1)
                <span class="stt-price"><del>{{number_format(Session::get('Cart')->totalPrice)}} đ</del></span>
                <hr>
                <span class="stt-price"> {{number_format( $total_coupon)}} đ</span>
                @else
                <span class="stt-price"><del>{{number_format(Session::get('Cart')->totalPrice)}} đ</del></span>
                <hr>
                <span class="stt-price"> {{number_format( $total_price_then)}} đ</span>
                @endif
                @else
                 <span class="stt-price">{{number_format(Session::get('Cart')->totalPrice)}} đ</span>
                @endif
                @else
                <span class="stt-price">0 đ</span>
                @endif
            </div>
            
            @if(Session::has("Cart") != null)
           
            <div class="tax-fee">
              
                <form action="{{route('checkcoupon')}}" method="post">
                    @csrf
                <p class="desc">Mã khuyến mãi : </p> 
                @if(Session::get('coupon'))
                <input class="form-control" name="coupon" value="{{$cou['counpon_code']}}" placeholder="Nhập mã giảm giá" type="text" disabled>
                @else
                <input class="form-control" name="coupon" placeholder="Nhập mã giảm giá" type="text">
                @endif
              
                @if(Session::get('coupon'))
                <a style="margin-top: 10px; float:right" class=" btn btn-danger" href="{{route('unsetcoupon')}}">Xóa mã</a>
                @else
                <button style="margin-top: 10px; float:right" class="btn btn-success" type="submit" >Xác nhận</button>

                @endif
                </form>
            @if(Session::has("Cart") != null && Session::get('coupon') )
            @if($cou['counpon_type']==1)
            <p class="desc counpon">*Đã áp dụng mã khuyến mãi <b> {{$cou['counpon_code']}} </b>, tiết kiệm được <b> {{number_format($total_price_then)}} đ</b></p> 
            @else
            <p class="desc counpon">*Đã áp dụng mã khuyến mãi <b> {{$cou['counpon_code']}} </b>, tiết kiệm được <b> {{number_format($total_coupon)}} đ</b></p> 
            @endif
            @else
            @endif
            
            </div>
            @if(Session::get('coupon'))
            <li>
                    
                        @if($cou['counpon_type']==0)
                            Mã giảm : {{$cou['counpon_number']}} %
                            <p>
                                @php 
                                $total_coupon = (Session::get('Cart')->totalPrice*$cou['counpon_number'])/100;
                                echo '<p><li>Đã giảm : '.number_format($total_coupon).'đ</li></p>';
                                @endphp
                            </p>
                            <p><li>Số tiền còn lại : {{number_format($total_price_then)}} đ</li></p>
                        @elseif($cou['counpon_type']==1)
                            Mã giảm : {{number_format($cou['counpon_number'])}} đ
                            <p>
                                @php 
                                $total_coupon = Session::get('Cart')->totalPrice - $cou['counpon_number'];
                                echo '<p><li>Đã giảm : '.number_format($total_price_then).'đ</li></p>';

                                @endphp
                            </p>
                            <p><li>Số tiền còn lại : {{number_format($total_coupon)}} đ</li></p>
                        @endif
            </li>
            @endif 
          
             
            <li>Chưa bao gồm phí ship * </li>
            @else
            @endif
            <div class="btn-checkout">
            <a href="{{route('checkout')}}" class="btn checkout">Thanh Toán</a>
            </div>
            @if(Session::has("Cart") == null )  
            <p class="pickup-info" >Không có sản phẩm trong giỏ hàng !!</p>
            @else
            @endif   
        </div>
    </div>
</div>