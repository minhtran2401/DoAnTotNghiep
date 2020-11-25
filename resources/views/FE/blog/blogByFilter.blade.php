<!-- Main content -->
<div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

    <ul class="posts-list main-post-list">
        @foreach ($blogmini as $b)
        <li class="post-elem">
            <div class="post-item style-left-info">
                <div class="thumbnail">
                    <a href="{{route('singleblog',$b->slug_blog)}}" class="link-to-post"><img src="{{asset('imgblog')}}/{{$b->img_blog}}" width="370"
                            height="270" alt=""></a>
                </div>
                <div class="post-content">
                <h4 class="post-name"><a href="{{route('singleblog',$b->slug_blog)}}" class="linktopost">{{$b->name_blog}}</a></h4>
                <p class="post-archive"><span class="post-date">{{date("d-m-Y", strtotime($b->time_blog))}}</span><span class="author">Người đăng: {{$b->name}}</span></p>
                    <p class="excerpt">
                        {!! Str::limit($b->tomtat_blog, 250, ' ...') !!}
                     </p>
                    <div class="group-buttons">
                        <a href="{{route('singleblog',$b->slug_blog)}}" class="btn readmore">XEM THÊM</a>
                      
                        <a  class="btn count-number commented"><span class="number">{{$b->luotxem}} </span>Lượt Xem</a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        
        {{-- <li class="post-elem">
            <div class="post-item style-left-info">
                <div class="thumbnail">
                    <a href="#" class="link-to-post"><img src="{{ asset('FE/assets') }}/images/our-blog/post-thumb-02.jpg" width="370"
                            height="270" alt=""></a>
                </div>
                <div class="post-content">
                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: #1 Herb Anxiety?</a></h4>
                    <p class="post-archive"><b class="post-cat">ORGANIC</b><span class="post-date"> / 20 Nov,
                            2018</span><span class="author">Posted By: Braum J.Teran</span></p>
                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many
                        plants that were historically used as dyes...</p>
                    <div class="group-buttons">
                        <a href="#" class="btn readmore">read more</a>
                        <a href="#" class="btn count-number liked"><i class="biolife-icon icon-heart-1"></i><span
                                class="number">20</span></a>
                        <a href="#" class="btn count-number commented"><i
                                class="biolife-icon icon-conversation"></i><span class="number">06</span></a>
                    </div>
                </div>
            </div>
        </li>
        <li class="post-elem">
            <div class="post-item style-left-info">
                <div class="thumbnail">
                    <a href="#" class="link-to-post"><img src="{{ asset('FE/assets') }}/images/our-blog/post-thumb-03.jpg" width="370"
                            height="270" alt=""></a>
                </div>
                <div class="post-content">
                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: #1 Herb Anxiety?</a></h4>
                    <p class="post-archive"><b class="post-cat">ORGANIC</b><span class="post-date"> / 20 Nov,
                            2018</span><span class="author">Posted By: Braum J.Teran</span></p>
                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many
                        plants that were historically used as dyes...</p>
                    <div class="group-buttons">
                        <a href="#" class="btn readmore">read more</a>
                        <a href="#" class="btn count-number liked"><i class="biolife-icon icon-heart-1"></i><span
                                class="number">20</span></a>
                        <a href="#" class="btn count-number commented"><i
                                class="biolife-icon icon-conversation"></i><span class="number">06</span></a>
                    </div>
                </div>
            </div>
        </li>
        <li class="post-elem">
            <div class="post-item style-left-info">
                <div class="thumbnail">
                    <a href="#" class="link-to-post"><img src="{{ asset('FE/assets') }}/images/our-blog/post-thumb-04.jpg" width="370"
                            height="270" alt=""></a>
                </div>
                <div class="post-content">
                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: #1 Herb Anxiety?</a></h4>
                    <p class="post-archive"><b class="post-cat">ORGANIC</b><span class="post-date"> / 20 Nov,
                            2018</span><span class="author">Posted By: Braum J.Teran</span></p>
                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many
                        plants that were historically used as dyes...</p>
                    <div class="group-buttons">
                        <a href="#" class="btn readmore">read more</a>
                        <a href="#" class="btn count-number liked"><i class="biolife-icon icon-heart-1"></i><span
                                class="number">20</span></a>
                        <a href="#" class="btn count-number commented"><i
                                class="biolife-icon icon-conversation"></i><span class="number">06</span></a>
                    </div>
                </div>
            </div>
        </li>
        <li class="post-elem">
            <div class="post-item style-left-info">
                <div class="thumbnail">
                    <a href="#" class="link-to-post"><img src="{{ asset('FE/assets') }}/images/our-blog/post-thumb-05.jpg" width="370"
                            height="270" alt=""></a>
                </div>
                <div class="post-content">
                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: #1 Herb Anxiety?</a></h4>
                    <p class="post-archive"><b class="post-cat">ORGANIC</b><span class="post-date"> / 20 Nov,
                            2018</span><span class="author">Posted By: Braum J.Teran</span></p>
                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many
                        plants that were historically used as dyes...</p>
                    <div class="group-buttons">
                        <a href="#" class="btn readmore">read more</a>
                        <a href="#" class="btn count-number liked"><i class="biolife-icon icon-heart-1"></i><span
                                class="number">20</span></a>
                        <a href="#" class="btn count-number commented"><i
                                class="biolife-icon icon-conversation"></i><span class="number">06</span></a>
                    </div>
                </div>
            </div>
        </li> --}}
    </ul>

    <div class="biolife-panigations-block ">
        <ul class="panigation-contain">
            <li><span class="current-page">1</span></li>
            <li><a href="#" class="link-page">2</a></li>
            <li><a href="#" class="link-page">3</a></li>
            <li><span class="sep">....</span></li>
            <li><a href="#" class="link-page">20</a></li>
            <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>
    </div>

</div>