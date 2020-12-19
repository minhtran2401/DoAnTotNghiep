
                            @foreach ($filter as $p)
                            <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a  href="{{route('singleproduct',$p->slug_sp)}}" class="link-to-product">
                                            <img src="{{ asset('hinhsp') }}/{{$p->img_sp}}" alt="dd" width="270" height="270"
                                                class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">{{$p->name_loaisp}}</b>
                                    <h4 class="product-title"><a href="{{route('singleproduct',$p->slug_sp)}}" class="pr-name">{{ Str::limit($p->name_sp, 20) }}</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($p->price_sp)}} đ</span></ins>
                
                                        </div>
                                        <div class="shipping-info">
                                            <p class="shipping-day">Sản Phẩm Mới</p>
                                            <p class="for-today">Mua ngay hôm nay</p>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">Tất cả sản phẩm đều đã được kiểm duyệt</p>
                                            <div class="buttons">
                
                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                                        aria-hidden="true"></i>Thêm vào giỏ</a>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach