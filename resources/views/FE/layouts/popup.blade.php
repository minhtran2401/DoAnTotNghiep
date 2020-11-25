<div class="quickview-container">
<div class="biolife-quickview-inner">
    <div class="media">
        <ul class="biolife-carousel quickview-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".quickview-nav"}'>
          
        <li><img src="{{asset('hinhsp')}}/{{$popup->img_sp}}" alt="" width="500" height="500"></li>

        </ul>
      
    </div>
    <div class="product-attribute">
    <h4 class="title"><a href="#" class="pr-name">{{$popup->name_sp}}</a></h4>
      

        <div class="price price-contain">
        <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($popup->price_sp)}} đ</span></ins>
        @if($popup->old_price_sp != null)
            <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($popup->old_price_sp)}} đ</span></del>
        @endif
        </div>
    <div class="excerpt">  @php echo $popup->motangan_sp @endphp</div>
        <div class="from-cart">
            <div class="buttons">
                <a href="javascript:0" onclick="AddCart({{$popup->id_sanpham}})" class="btn add-to-cart-btn btn-bold">Thêm Vào Giỏ</a>
            </div>
        </div>

        <div class="product-meta">
            <div class="product-atts">
                <div class="product-atts-item">
                    <b class="meta-title">Danh mục:</b>
                    <ul class="meta-list">
                    <li><a href="{{route('cateprod',$popup->slug_loaisp)}}" class="meta-link">{{$popup->name_loaisp}}</a></li>  
                    </ul>
                </div>
            
                <div class="product-atts-item">
                    <b class="meta-title">Thương hiệu:</b>
                    <ul class="meta-list">
                    <li><a href="#" class="meta-link">{{$popup->name_thuonghieu}}</a></li>
                    </ul>
                </div>
            </div>
        <span class="sku">SKU: {{$popup->sku}}</span>
            <div class="biolife-social inline add-title">
                <span class="fr-title">Chia sẻ:</span>
                <ul class="socials">
                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
