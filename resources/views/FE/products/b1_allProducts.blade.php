<div class="page-contain category-page left-sidebar">
    <div class="container">
        <div class="row">
            
            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

             

                <div class="product-category grid-style">

                    <div id="top-functions-area" class="top-functions-area" >
                        <div class="flt-item to-left group-on-mobile">
                            <span class="flt-title">Bộ Lọc Sản Phẩm </span>
                            <a href="#" class="icon-for-mobile">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <div class="wrap-selectors">
                                <form action="#" name="frm-refine" method="get">
                                   
                                
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
                        <ul class="products-list" id="filter_dataz">

                     
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
                               
                                @elseif($productpage)
                                    {!! $productpage->links() !!}}
                                @else
                                @endif
                                </li>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="biolife-mobile-panels">
                    <span class="biolife-current-panel-title">Sidebar</span>
                    <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                </div>
                <div class="sidebar-contain">
                   

                    <div class="widget price-filter biolife-filter">
                        <h4 class="wgt-title">Giá</h4>
                        <div class="wgt-content">
                           
                                <input class="input-number" type="hidden" name = "minprice" id="hidden_minimum_price" value="15000" />
                                <input class="input-number" type="hidden" name = "maxprice" id="hidden_maximum_price" value="50000" />
                                <p  id="price_show">Từ 15000đ - 50000đ</p>
                                
                                <div id="price_range"></div>
                        
                               
                         
                        </div>
                    </div>

                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Thương Hiệu</h4>
                        <div class="wgt-content">
                            <ul class="check-list multiple">
                                @php
                                $brand = App\SanPham::distinct('id_thuonghieu')->where('Anhien',1)->get('id_thuonghieu');
                                @endphp
                                @foreach ($brand as $b)
                                <li class="">
                                    <input type="checkbox" class="common_selector brand" name="brand[]" value="{{$b->id_thuonghieu}}" id="brand{{$b->id_thuonghieu}}">    
                                    <label for="brand{{$b->id_thuonghieu}}">   @php
                                    $id_thuonghieu =$b->id_thuonghieu;
                                    $tl = App\ThuongHieu::find($id_thuonghieu);
                                    echo $tl->name_thuonghieu;
                                    @endphp</label>
                                 
                                </li>
                               @endforeach
                                
                            </ul>
                        </div>
                    </div>

                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Nhóm Sản Phẩm</h4>
                        <div class="wgt-content">
                            <ul class="check-list multiple">
                                @php
                                $group = App\SanPham::distinct('id_nhomsp')->where('Anhien',1)->get('id_nhomsp');
                                @endphp
                                @foreach ($group as $b)
                                <li class="">
                                    <input type="checkbox" class="common_selector group" id="group{{$b->id_nhomsp}}" name="group[]" value="{{$b->id_nhomsp}}" >    
                                    <label for="group{{$b->id_nhomsp}}">     @php
                                        $id_nhomsp =$b->id_nhomsp;
                                        $tl = App\NhomSanPham::find($id_nhomsp);
                                        echo $tl->name_nhomsp;
                                        @endphp</label>
                                 
                                </li>
                               
                               @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Loại Sản Phẩm</h4>
                        <div class="wgt-content">
                            <ul class="check-list multiple">
                                @php
                                  $type = App\SanPham::distinct('id_loaisp')->where('Anhien',1)->get('id_loaisp');
                                @endphp
                                @foreach ($type as $b)
                                <li class="">
                                    <input type="checkbox" class="common_selector type" id="type{{$b->id_loaisp}}" name="type[]" value="{{$b->id_loaisp}}">    
                                    <label for="type{{$b->id_loaisp}}">     @php
                                        $id_loaisp =$b->id_loaisp;
                                        $tl = App\LoaiSanPham::find($id_loaisp);
                                        echo $tl->name_loaisp;
                                        @endphp</label>
                                 
                                </li>
                              
                               @endforeach
                            </ul>
                        </div>
                    </div>

              

                </div>

            </aside>
        </div>
    </div>
</div>
@section('js')
<script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
     $(document).ready(function () {
        

    var id_thuonghieu = [];
    var id_loaisp = [];
    var id_nhomsp = [];

    // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
    $('input[name="brand[]"],input[name="type[]"],input[name="group[]"],input[name="maxprice"],input[name="minprice"]').on('change', function (e) {
         e.preventDefault();
      
           
     
        id_thuonghieu = []; // reset 
        $('input[name="brand[]"]:checked').each(function()
        {
            id_thuonghieu.push($(this).val());
        });
        id_loaisp = []; // reset 
        $('input[name="type[]"]:checked').each(function()
        {
            id_loaisp.push($(this).val());
        });
        id_nhomsp = []; // reset 
        $('input[name="group[]"]:checked').each(function()
        {
            id_nhomsp.push($(this).val());
        });
  
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $('input[name="minprice"]').change(function()
        {
            minimum_price.push($(this).val());
        });
       
        $('input[name="maxprice"]').change(function()
        {
            maximum_price.push($(this).val());
        });
        
        $.post('{{route('profilter')}}', { maximum_price: maximum_price, minimum_price: minimum_price ,id_thuonghieu: id_thuonghieu,id_loaisp: id_loaisp, id_nhomsp: id_nhomsp ,_token: '{{csrf_token()}}'}, function(res){
            
            $('#filter_dataz').html(res);
        });            
    });

    });
    </script>
      <script src="{{asset('FE')}}/assets/js/customs_js/sort_js.js"></script>
      <script>
           $('#price_range').slider({
        range:true,
        min:1000,
        max:400000,
        values:[15000, 50000],
        step:5000,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + 'đ ' + ' - ' + ui.values[1] + 'đ');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);

        }
    });
      </script>
@endsection