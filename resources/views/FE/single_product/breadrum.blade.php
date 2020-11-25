<!--Baner title Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">{{$sp->name_sp}}</h1>
</div>
<!--Breadrum section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang chủ</a></li>
        <li class="nav-item"><a href="#" class="permal-link">{{$sp->name_loaisp}}</a></li>
            <li class="nav-item"><span class="current-page">{{$sp->name_sp}}</span></li>
        </ul>
    </nav>
</div>