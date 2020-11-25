<!--Block 08: Blog Posts-->
<div class="blog-posts sm-margin-top-93px sm-padding-top-72px xs-padding-bottom-50px">
    <div class="container">
        <div class="biolife-title-box">
            <span class="subtitle">Cập nhật những tin tức mới và thú vị nhất</span>
            <h3 class="main-title">Blog của GreenFresh</h3>
        </div>
        <ul class="biolife-carousel nav-center nav-none-on-mobile xs-margin-top-36px" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
            @foreach ($blognewz as $bln)          
         
            <li>
                <div class="post-item style-bottom-info layout-02 ">
                    <div class="thumbnail">
                    <a href="#" class="link-to-post"><img src="{{asset('imgblog')}}/{{$bln->img_blog}}" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span>blog</span>
                            <span class="month">Mới</span>
                        </div>
                    </div>
                    <div class="post-content">
                    <h4 class="post-name"><a href="{{route('singleblog',$bln->slug_blog)}}" class="linktopost">{{$bln->name_loaiblog}}: {{$bln->name_blog}}</a></h4>
                        <div class="post-meta">
                        <a  class="post-meta__item author"><img src="{{asset('imguser')}}/{{$bln->avatar}}" width="28" height="28" alt=""><span>{{$bln->name}}</span></a>
                            <a href="#" class="post-meta__item btn liked-count">{{$bln->luotxem}} <span class="fa fa-eye"></span></a>
                           
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
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
                    <div class="excerpt">{!! Str::limit($bln->tomtat_blog, 145, ' ...') !!}                    </div>
                        <div class="group-buttons">
                        <a href="{{route('singleblog',$bln->slug_blog)}}" class="btn readmore">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>