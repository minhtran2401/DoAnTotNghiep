<!-- Banner Title -->
@if ( isset($type_product) && $type_product === "all-products" )
<div class="hero-section hero-background">
    <h1 class="page-title"> Sản Phẩm Mới</h1>
</div>
<!-- Breadrum -->
<div class="container">
    <nav class="biolife-nav">
        <ul>
        <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang Chủ</a></li>
        
            <li class="nav-item"><span class="current-page">Tất cả sản phẩm</span></li>
        </ul>
    </nav>
</div>
@else

<div class="hero-section hero-background">
    <h1 class="page-title"> {{$cate_pro->name_loaisp}} </h1>
</div>
<!-- Breadrum -->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('index')}}" class="permal-link">Trang Chủ</a></li>
            <li class="nav-item"><a href="#" class="permal-link">Danh Mục Sản Phẩm</a></li>
            <li class="nav-item"><span class="current-page">{{$cate_pro->name_loaisp}}</span></li>
        </ul>
    </nav>
</div>
@endif