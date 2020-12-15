<aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <div class="biolife-mobile-panels">
        <span class="biolife-current-panel-title">Menu</span>
        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
    </div>
    <div class="sidebar-contain">


        <div class="widget price-filter biolife-filter">
            <h4 class="wgt-title">Giá</h4>
            <div class="wgt-content">
                <div class="frm-contain">
                <form action="" name="price-filter" id="price-filter" method="get">
                        <p class="f-item">

                            <input class="input-number " type="number" id="pr-from" value="" name="price-from">
                            <label for="pr-from">đ đến</label>
                        </p>
                        <p class="f-item">

                            <input class="input-number" type="number" id="pr-to" value="" name="price-from">
                            <label for="pr-to">đ</label>
                        </p>
                        <p class="f-item"><button class="btn-submit" type="submit">Tìm</button></p>
                    </form>
                </div>
                {{-- <ul class="check-list bold single">
                    <li class="check-list-item"><a href="#" class="check-link">$0 - $5</a></li>
                    <li class="check-list-item"><a href="#" class="check-link">$5 - $10</a></li>
                    <li class="check-list-item"><a href="#" class="check-link">$15 - $20</a></li>
                </ul> --}}
            </div>
        </div>

        <div class="widget biolife-filter">
            <h4 class="wgt-title">Kích hoạt</h4>
            <div class="wgt-content">
                <h3>Tổng cộng: <span class="_t-item">(0 sản phẩm)</span></h3>
                <div class="col-12 p-0" id="catFilters"></div>
            </div>
        </div>

        <div class="widget biolife-filter">
            <h4 class="wgt-title">Thương hiệu</h4>
            <div class="wgt-content">
                <div class="">
                <?php $counter = 0; ?>
                @if(!empty(App\ThuongHieu::all()))
                @foreach (App\ThuongHieu::all() as $th)
                    <input class="check-list-item" type="checkbox" {{($counter ==0 ? 'checked' : '')}}
                    attr-name="{{$th->name_thuonghieu}}" id="{{$th->id_thuonghieu}}">
                    <label class="check-link" for="{{$th->id_thuonghieu}}">{{($th->name_thuonghieu)}}</label><br>
                <?php $counter++; ?>
                @endforeach
                @endif
                </div>
            </div>
        </div>


        <div class="widget biolife-filter">
            <h4 class="wgt-title">Sản phẩm vừa xem</h4>
            <div class="wgt-content">
                <ul class="products">

                    <li class="pr-item">
                        <div class="contain-product style-widget">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product" tabindex="0">
                                    <img src="{{asset('FE')}}/assets/images/products/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <b class="categories">Fresh Fruit</b>
                                <h4 class="product-title"><a href="#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                <div class="price">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                            </div>
                        </div>
                    </li>
                


                </ul>
            </div>
        </div>

    </div>

</aside>
