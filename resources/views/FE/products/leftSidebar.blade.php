@if ( isset($ketquatim)  )
<aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <div class="biolife-mobile-panels">
        <span class="biolife-current-panel-title">Menu</span>
        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
    </div>
    <div class="sidebar-contain">

 
        <div class="widget biolife-filter">
            <h4 class="wgt-title">Đã tìm thấy:</h4>
            <div class="wgt-content">
                <h3><span class="_t-item">{{count($ketquatim)}} sản phẩm </span></h3>
                <div class="col-12 p-0" id="catFilters"></div>
            </div>
        </div>



        <div class="widget biolife-filter">
            <h4 class="wgt-title">Sản phẩm vừa xem</h4>
            <div class="wgt-content">
                <ul class="products">
                    @if($recentlyViewed)
                    @foreach ($recentlyViewed as $item) 
                    <li class="pr-item">
                        <div class="contain-product style-widget">
                            <div class="product-thumb">
                                <a href="{{route('singleproduct',$item->slug_sp)}}" class="link-to-product" tabindex="0">
                                    <img src="{{asset('hinhsp')}}/{{$item->img_sp}}" alt="dd" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <b class="categories">
                                    @php
                                    $id = $item->id_loaisp;
                                    $tl = \App\LoaiSanPham::find($id);
                                    echo $tl->name_loaisp;
                                  @endphp
                                   </b>
                                <h4 class="product-title"><a href="{{route('singleproduct',$item->slug_sp)}}" class="pr-name" tabindex="0">{{$item->name_sp}}</a></h4>
                                <div class="price">
                                    <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item->price_sp)}} đ</span></ins>
                                    @if($item->old_price_sp)
                                    <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item->old_price_sp)}} đ</span></del>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                   
                    
                  @endforeach
                  @else
                    @endif

                </ul>
            </div>
        </div>

    </div>

</aside>
@else
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
                <form action="{{route('search2gia')}}" name="price-filter" id="price-filter">
                    {{ csrf_field() }}
                    <input type="hidden" id="cay-vl" name="id_loaisp" value="{{$cate_pro->id_loaisp}}">

                        <p class="f-item">

                            <input class="input-number "  id="pr-from" value="" name="price-from">
                            <label for="pr-from">đ Đến</label>
                        </p>
                        <p class="f-item">

                            <input class="input-number" id="pr-to" value="" name="price-to">
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
                @php
              $catepro  = App\LoaiSanPham::withCount('ktsp')->where('id_loaisp',$cate_pro->id_loaisp)->get();
                // dd($catepro);
                @endphp
                  @foreach ($catepro as $b)
                  <h3>Tổng cộng: <span class="_t-item">({{$b->ktsp_count}} sản phẩm)</span></h3>

                  @endforeach
                <div class="col-12 p-0" id="catFilters"></div>
            </div>
        </div>

        <div class="widget biolife-filter">
            <h4 class="wgt-title">Thương hiệu</h4>
            <div class="wgt-content">
                <div class="">
                    
                       @php
                  
        $value = DB::table('nhacungcap')
        ->join('sanpham','sanpham.id_thuonghieu','nhacungcap.id_thuonghieu')
        ->join('loaisp','sanpham.id_loaisp','loaisp.id_loaisp')
        ->select('nhacungcap.id_thuonghieu',DB::raw('count(*) as total'))
        ->groupBy('nhacungcap.id_thuonghieu')
        ->where('loaisp.id_loaisp',$cate_pro->id_loaisp)
        ->get();

       
       

    @endphp
     <input type="hidden" id="cay-vl" name="id_loaisp" value="{{$cate_pro->id_loaisp}}">
                @foreach ($value as $th)
                   
                    <input class="check-list-item" type="checkbox" name="cat[]" value="{{$th->id_thuonghieu}}" id="cat{{$th->id_thuonghieu}}" >
                    <label for="cat{{$th->id_thuonghieu}}" class="check-link">
                        @php
                        $id = $th->id_thuonghieu;
                        $tl = \App\ThuongHieu::find($id);
                        echo $tl->name_thuonghieu;
                      @endphp
                       ({{$th->total}}) </label><br>
                    @endforeach
                       
               
               
                </div>
            </div>
        </div>


        <div class="widget biolife-filter">
            <h4 class="wgt-title">Sản phẩm vừa xem</h4>
            <div class="wgt-content">
                <ul class="products">
                    @if($recentlyViewed)
                    @foreach ($recentlyViewed as $item) 
                    <li class="pr-item">
                        <div class="contain-product style-widget">
                            <div class="product-thumb">
                                <a href="{{route('singleproduct',$item->slug_sp)}}" class="link-to-product" tabindex="0">
                                    <img src="{{asset('hinhsp')}}/{{$item->img_sp}}" alt="dd" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <b class="categories">
                                    @php
                                    $id = $item->id_loaisp;
                                    $tl = \App\LoaiSanPham::find($id);
                                    echo $tl->name_loaisp;
                                  @endphp
                                   </b>
                                <h4 class="product-title"><a href="{{route('singleproduct',$item->slug_sp)}}" class="pr-name" tabindex="0">{{$item->name_sp}}</a></h4>
                                <div class="price">
                                    <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item->price_sp)}} đ</span></ins>
                                    @if($item->old_price_sp)
                                    <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($item->old_price_sp)}} đ</span></del>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                   
                    
                  @endforeach
                  @else
                    @endif

                </ul>
            </div>
        </div>

    </div>

</aside>



@endif