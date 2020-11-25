<!--Block 05: Banner promotion 02-->
<div class="banner-promotion-02 z-index-20">
    <div class="biolife-banner promotion2 biolife-banner__promotion2 advance">
        <div class="banner-contain">
            <div class="container">
                <div class="media"></div>
                <div class="text-content">
                    <b class="first-line">Blog Tuần Này</b>
                    @if($bannerblog)
                <span style="color: #7faf51" class="second-line">{{$bannerblog->name_blog}}</span>
                <div class="third-line">{!!$bannerblog->tomtat_blog!!}</div>
                    <p class="buttons">
                    <a href="{{route('singleblog',$bannerblog->slug_blog)}}" class="btn btn-bold">Xem tiếp</a>
                    <a href="{{route('allblog')}}" class="btn btn-thin">Xem blog khác</a>
                    </p>
                </div>
                @else
                @endif
            </div>
        </div>
    </div>
</div>