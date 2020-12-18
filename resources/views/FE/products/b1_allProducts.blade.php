<!-- All products -->
<div class="product-category grid-style">

    <div id="top-functions-area" class="top-functions-area">
        <div class="flt-item to-left group-on-mobile">
            <span class="flt-title">Lọc Sản Phẩm</span>
            <a href="#" class="icon-for-mobile">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="wrap-selectors">
                <form action="#" name="frm-refine" method="get">
                    <span class="title-for-mobile">Lọc Sản Phẩm</span>
                    <div data-title="Price:" class="selector-item">
                        <select  id="price" class="selector">
                            <option value="">Giá</option>
                            <option value="0-20000">0-20000</option>
                            <option value="20000-50000">20000-50000</option>
                            <option value="50000-100000">50000-100000</option>
                            <option value="100000-150000">100000-150000</option>
                            <option value="150000-250000">150000-250000</option>
                        </select>
                    </div>
                    <div data-title="Brand:" class="selector-item">
                        <select class="selector">
                            <option value="all">Thương hiệu</option>
                            <option value="br2">Brand first</option>
                            <option value="br3">Brand second</option>
                            <option value="br4">Brand third</option>
                            <option value="br5">Brand fourth</option>
                            <option value="br6">Brand fiveth</option>
                        </select>
                    </div>
                    <div data-title="Avalability:" class="selector-item">
                        <select id="ID_sp" class="selector">
                            <option value="all">Loại</option>
                            @foreach (App\LoaiSanPham::all() as $ct)

                            <option value="{{$ct->id_loaisp}}">{{$ct->name_loaisp}}</option>

                            @endforeach
                        </select>
                    </div>
                    {{-- <button class="btn" type="submit" id="findBtnn">
                            Go
                    </button> --}}
                    <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                </form>

            </div>
        </div>
        <div class="flt-item to-right">
            <form action="#" name="softProducts" id="softProducts" method="get">
                <span class="flt-title">Sắp xếp</span>
                <div class="wrap-selectors">
                    <div class="selector-item orderby-selector">
                        <select name="sort" id="sort" class="orderby" aria-label="Shop order">
                            <option value="" selected="selected">Chọn</option>
                            <option value="product_latest" @if(isset($_GET['sort']) && $_GET['sort']=="product_latest") selected="" @endif>
                            Sản phẩm mới nhất</option>
                            <option value="product_name_a_z" @if(isset($_GET['sort']) && $_GET['sort']=="product_name_a_z") selected="" @endif>
                            Sản phẩm A - Z</option>
                            <option value="product_name_z_a" @if(isset($_GET['sort']) && $_GET['sort']=="product_name_z_a") selected="" @endif>
                            Sản phẩm Z - A</option>
                            <option value="price_lowest" @if(isset($_GET['sort']) && $_GET['sort']=="price_lowest") selected="" @endif>
                            Giá thấp đến cao</option>
                            <option value="price_highest" @if(isset($_GET['sort']) && $_GET['sort']=="price_highest") selected="" @endif>
                            Giá cao đến thấp</option>
                        </select>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <ul class="products-list">
            @foreach ($productpage as $p)
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
                                        aria-hidden="true"></i>thêm vào giỏ</a>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>

    <div class="biolife-panigations-block">
        <ul class="panigation-contain">
            <li>
            @if(isset($_GET['sort']) && !empty($_GET['sort'])){
                {{ $productpage->appends(['sort' => $_GET['sort']])->links()  }}

            @else
                {!! $productpage->links() !!}}
            @endif
            </li>


        </ul>
    </div>

</div>
    <script src="{{asset('FE')}}/assets/js/customs_js/sort_js.js"></script>
