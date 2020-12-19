
<div id="search-brand-results" class="product-category grid-style">
    <div style="margin-bottom: 15px" class="header">
        Sản Phẩm Đã Lọc
    </div>
<div  class="row">
        <ul class="products-list">
            @forelse ($thuonghieu as $n)
            <li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="contain-product layout-default">

                
                          <div class="product-thumb">
                        <a href="{{route('singleproduct',$n->slug_sp)}}" class="link-to-product">
                        <img src="{{asset('hinhsp')}}/{{$n->img_sp}}" alt="dd" width="270" height="270" class="product-thumnail">
                        </a>
                    </div>
                    <div class="info">
                    <b class="categories">{{$n->name_loaisp}}</b>
                    <h4 class="product-title"><a href="{{route('singleproduct',$n->slug_sp)}}" class="pr-name">{{\Illuminate\Support\Str::limit($n->name_sp,30, $end='')}}</a></h4>
                        <div class="price">
                        <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($n->price_sp)}} đ</span></ins>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">Sản phẩm mới</p>
                            <p class="for-today">Mua ngay hôm nay</p>
                        </div>
                        <div class="slide-down-box">
                            <p class="message">Tất cả sản phẩm của GreenFresh đều đảm bảo hợp vệ sinh.</p>
                            <div class="buttons">
                                @if($n->khohang_soluong < 5)
                                <a href="javascript:0" disabled class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Tạm Hết Hàng</a>
                                @else
                                <a href="javascript:0" onclick="AddCart({{$n->id_sanpham}})" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm Vào Giỏ</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    @empty
                        <i>Không có sản phẩm...</i>
                  
                  

                </div>
            </li>
            @endforelse

        </ul>
    </div>

</div>