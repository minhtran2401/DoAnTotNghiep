<!-- summary info -->
<div class="sumary-product single-layout">
    <div class="media">
        <ul class="biolife-carousel slider-for"
            data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
            <li><img src="{{asset('hinhsp')}}/{{$sp->img_sp}}" alt="" width="500" height="500"></li>
            @foreach ($hinh as $h)
            <li><img src="{{asset('hinhchitiet')}}/{{$h->name_img}}" alt="" width="500" height="500"></li>
            @endforeach
           

          
        </ul>
        <ul class="biolife-carousel slider-nav"
            data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
            <li><img src="{{asset('hinhsp')}}/{{$sp->img_sp}}" alt="" width="88" height="88"></li>
            @foreach ($hinh as $h)
            <li><img src="{{asset('hinhchitiet')}}/{{$h->name_img}}" alt="" width="88" height="88"></li>
            @endforeach
           
    
           
        </ul>
    </div>
    <div class="product-attribute">
        
    <h3 class="title">{{$sp->name_sp}}</h3>
    <b class="width-80percent sku category">Nhà Cung Cấp: {{$sp->name_thuonghieu}}</b>
    <span class="sku">Sku: #{{$sp->sku}}</span>
        @if($sp->motangan_sp)
        <div class="excerpt">{!!$sp->motangan_sp!!}</div>
        @else
        <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into electronic typesetting<p>
        @endif
        <div class="price">
        <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($sp->price_sp)}} đ / {{$sp->name_donvi}}</span></ins>
        @if($sp->old_price_sp)
        <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($sp->old_price_sp)}} đ</span></del>
        @else
        @endif
        </div>
        @if($sp->old_price_sp  && $sp->time_discount > $timenow)
         <div class="biolife-countdown" data-datetime="{{$sp->time_discount}}"></div>
        @else
        @endif
        <div class="shipping-info">
            <p style="margin-bottom: 8px" class="shipping-day">Giao Hàng Cấp Tốc </p>
            @if($sp->old_price_sp && $sp->time_discount < $timenow)
            <p style="color: rgb(236, 56, 56)" class="for-today">Sản Phẩm Đang Khuyến Mãi*</p>
            @elseif($sp->old_price_sp && $sp->time_discount > $timenow)
            <p style="color: rgb(236, 56, 56)" class="for-today">Sản Phẩm Khuyến Mãi Có Giới Hạn *</p>
            @else
           
            @endif
        </div>
    </div>
    <!-- Cart Form -->
    @include('FE.single_product.b1_cartForm')
</div>