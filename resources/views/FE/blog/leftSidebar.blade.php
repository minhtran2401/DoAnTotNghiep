<!-- Sidebar -->
<aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

    <div class="biolife-mobile-panels">
        <span class="biolife-current-panel-title">Sidebar</span>
        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
    </div>

    <div class="sidebar-contain">

        <!--Search Widget-->
        <div class="widget search-widget">
            <div class="wgt-content">
                <form action="#" name="frm-search" method="get" class="frm-search">
                    <input type="text" name="s" value="" placeholder="SEARCH..." class="input-text">
                    <button type="submit" name="ok"><i class="biolife-icon icon-search"></i></button>
                </form>
            </div>
        </div>

         <!--Categories Widget-->
         <div class="widget biolife-filter">
            <h4 class="wgt-title">DANH MỤC BLOG</h4>
            <div class="wgt-content">
                <ul class="cat-list">
                    @foreach ($countblogz as $b)
                    <li class="cat-list-item"><a  class="cat-link" href="{{route('cateblog',$b->slug_loaiblog)}}">{{$b->name_loaiblog}}  ( {{$b->ktblog_count}} ) </a></li>
                    @endforeach
                    
                </ul>
            </div>
        </div>

        <!--Posts Widget-->
        <div class="widget posts-widget">
            <h4 class="wgt-title">Bài viết gần đây</h4>
            <div class="wgt-content">
                <ul class="posts">
                    @foreach ($blognewz as $bn)
                    
                 
                    <li>
                        <div class="wgt-post-item">
                            <div class="thumb">
                                <a href="{{route('singleblog',$bn->slug_blog)}}"><img src="{{asset('imgblog')}}/{{$bn->img_blog}}" width="80" height="70"
                                        alt=""></a>
                            </div>
                            <div class="detail">
                                <h4 class="post-name"><a href="{{route('singleblog',$bn->slug_blog)}}"> {{$bn->name_blog}}</a></h4>
                            <p class="post-archive">{{date("d-m-Y", strtotime($bn->time_blog))}}<span class="comment">{{$bn->luotxem}} lượt xem</span></p>
                            </div>
                        </div>
                    </li>
                    
                    @endforeach
                </ul>
            </div>
        </div>




    </div>
</aside>