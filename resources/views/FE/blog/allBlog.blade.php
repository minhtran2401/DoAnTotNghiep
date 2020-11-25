<!-- Page Content -->
@section('breadrum')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Blog Của GreenFresh</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Blog Của GreenFresh</span></li>
            </ul>
        </nav>
    </div>
@endsection
<div class="page-contain blog-page">
    <div class="container">
        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="row">

                <!--articles block-->
                <ul class="posts-list main-post-list">
                    @foreach ($all_blog as $blog)
                        <li class="post-elem col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="post-item effect-04 style-bottom-info">
                            <div class="thumbnail">
                            <a href="{{ route('singleblog', [$blog->slug_blog]) }}" class="link-to-post"><img src="{{ asset('imgblog') }}/{{ $blog->img_blog }}"
                                        width="370" height="270" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h4 class="post-name"><a href="{{ route('singleblog', [$blog->id_blog]) }}" class="linktopost">{{ $blog->name_blog }}</a>
                                </h4>
                                <p class="post-archive"><b class="post-cat">
                                    <?php $loaiblog = App\LoaiBlog::where('id_loaiblog', $blog->id_loaiblog)->firstOrFail('name_loaiblog'); ?>
                                    {{$loaiblog->name_loaiblog }}
                                </b><span class="post-date">{{date('d-m-Y', strtotime($blog->time_blog))}}</span><span class="author">Người đăng: {{$blog->name}}</span></p>
                            <div class="excerpt">
                                {!!strlen($blog->tomtat_blog) > 310 ? substr($blog->tomtat_blog,0,310) : $blog->tomtat_blog!!}...
                            </div>
                                <div class="group-buttons">
                                    <a href="{{ route('singleblog', [$blog->id_blog]) }}" class="btn readmore">Đọc thêm</a>
                                   
                                    <a  class="btn count-number">Lượt Xem <i
                                            class="fa fa-eyes"></i><span
                                    class="number">{{$blog->luotxem}}</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                   

                  
                </ul>
              
            </div>

            <!--Panigation Block-->
            <div class="biolife-panigations-block ">
                <ul class="panigation-contain">
                    <li>{!! $all_blog->links() !!}</li>
                   
                </ul>
            </div>

        </div>
    </div>
</div>