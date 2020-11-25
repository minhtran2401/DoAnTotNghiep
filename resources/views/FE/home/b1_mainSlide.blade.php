<!--Block 01: Main Slide-->
<div class="main-slide block-slider nav-change">
    <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "autoplaySpeed":500, "autoplay": true, "speed": 800}' >
        @foreach ($bannerhome as $bnh)
            
      
        <li>
        <div style="background-image: url('{{asset('bannerquangcao')}}/{{$bnh->banner_quangcao}}');z-index: 10;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: 560px;" class="slide-contain slider-opt03__layout02 slide_animation type_02">
                <div class="media background-geen-01"></div>
                <div class="text-content">
                    <i class="first-line">GreenFresh</i>
                <h3 class="second-line">{{$bnh->name_quangcao}}</h3>
                <p class="third-line">{{$bnh->mota_quangcao}}</p>
                    <p class="buttons">
                    <a href="{{route('allprod')}}" class="btn btn-bold">Vào Cửa Hàng</a>
                       
                    </p>
                </div>
            </div>
        </li>
  @endforeach
    </ul>
</div>