<!-- Breadrum section -->
<div class="hero-section hero-background style-02">
    <a href="{{route('cateblog',$chitiet_blog->slug_loaiblog)}}"><h1 class="page-title">{{$chitiet_blog->name_loaiblog}} </h1></a>
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang Chủ</a></li>
        <li class="nav-item"><span class="current-page">{{$chitiet_blog->name_blog}}</span></li>
        </ul>
    </nav>
</div>