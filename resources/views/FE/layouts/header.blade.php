   <!-- Preloader -->
   <div id="biof-loading">
    <div class="biof-loading-center">
        <div class="biof-loading-center-absolute">
            <div class="dot dot-one"></div>
            <div class="dot dot-two"></div>
            <div class="dot dot-three"></div>
        </div>
    </div>
</div>

<!-- HEADER -->
<header id="header" class="header-area style-01 layout-03">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>{{$info->contactemail}}</a></li>
                <li><a href="#">{{$info->introduction}}</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="horizontal-menu">

                    @if (Auth::guest())  <li> <a class="login-link"><i class="biolife-icon icon-login"></i>    <a href="{{route('dang-nhap')}}">Đăng nhập/  </a>  <a href="{{route('dang-ki')}}"> Đăng kí</a> </a>   </li>@else
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i style="margin-right: 5px" class="biolife-icon icon-login "></i>  {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul  class="dropdown-menu" role="menu">
                    <li><a style="color: #7faf51" href="{{route('canhan')}}"><i  style="margin-right: 5px" class="fa fa-btn fa-user"></i>Thông Tin Cá Nhân</a></li>
                        <li><a style="color: #7faf51" href="{{route('canhan_donhang')}}"><i  style="margin-right: 5px" class="fa fa-btn fa-clock-o"></i>Lịch Sử Mua Hàng</a></li>
                        <li><a style="color: #7faf51" href="{{route('dmk')}}"><i  style="margin-right: 5px" class="fa fa-btn fa-lock"></i>Đổi mật khẩu</a></li>
                     <li><a style="color: #7faf51" href="{{ route('logout') }}"><i  style="margin-right: 5px" class="fa fa-btn fa-sign-out"></i>Đăng Xuất</a></li>
                    </ul>
                </li>
            @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
                @include('FE.layouts.menu')
        </div>
    </div>
    <div class="header-bottom hidden-sm hidden-xs">

    @include('FE.layouts.sidebar')

    </div>
</header>
