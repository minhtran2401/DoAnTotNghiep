<?php
 $link2 = ['blog','blog/*/edit','blog/create','loai-blog','loai-blog/*/edit','loai-blog/create',];
 $link = ['nhom-san-pham','nhom-san-pham/*/edit','nhom-san-pham/create','loai-san-pham','loai-san-pham/*/edit','loai-san-pham/create','san-pham','san-pham/*/edit','san-pham/create','thuong-hieu','thuong-hieu/*/edit','thuong-hieu/create','donvitinh','donvitinh/*/edit','donvitinh/create','nhap-kho-hang','nhap-kho-hang/*/edit','nhap-kho-hang/create',];
 $link3 = ['info','info/*/edit','info/create','sns','sns/*/edit','sns/create',];
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
      <a href="{{asset('dashboard')}}"> <img alt="image" src="{{asset('siteinfo')}}/{{$info->sitelogo}}"  class="header-logo" />
            <span> <p class="title" > {{ Auth::user()->name }}<a  href="{{ route('logout') }}"> <i class="fas fa-power-off text-danger" alt="Đăng xuất" ></i> </a>
            </p>
            </span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">QUẢN TRỊ WEBSITE</li>
        <li class="dropdown  {{ request()->is('dashboard','admin') ? 'active' : '' }}">
        <a href="{{asset('dashboard')}}" class="nav-link"><i  data-feather="monitor"></i><span>TỔNG QUAN</span></a>
        </li>



        <li class="dropdown {{ request()->is($link) ? 'active' : '' }}">
        <a href="" class="menu-toggle nav-link has-dropdown"><i
                data-feather="grid"></i><span>QUẢN LÍ SẢN PHẨM</span></a>
            <ul class="dropdown-menu active">
              <li><a class="nav-link {{ request()->is('nhap-kho-hang','nhap-kho-hang/*/edit','nhap-kho-hang/create') ? 'activeli' : '' }}" href="{{route('nhap-kho-hang.index')}}" href=""><i
                data-feather="folder"></i> Lô Hàng </a>
              </li>
            <li><a class="nav-link {{ request()->is('nhom-san-pham','nhom-san-pham/*/edit','nhom-san-pham/create') ? 'activeli' : '' }}" href="{{route('nhom-san-pham.index')}}"><i
                data-feather="layers"></i> Nhóm Sản Phẩm </a>
              </li>
              <li>
                <a class="nav-link {{ request()->is('loai-san-pham','loai-san-pham/*/edit','loai-san-pham/create') ? 'activeli' : '' }}" href="{{route('loai-san-pham.index')}}"><i data-feather="box"></i>Loại Sản Phẩm </a>
              </li>
              <li><a class="nav-link {{ request()->is('san-pham','san-pham/*/edit','san-pham/create') ? 'activeli' : '' }}" href="{{route('san-pham.index')}}"><i
                data-feather="square"></i> Sản Phẩm </a>
              </li>
              <li><a class="nav-link {{ request()->is('donvitinh','donvitinh/*/edit','donvitinh/create') ? 'activeli' : '' }}" href="{{route('donvitinh.index')}}"><i
                data-feather="cpu"></i> Đơn Vị Tính </a>
              </li>
              <li><a class="nav-link {{ request()->is('thuong-hieu','thuong-hieu/*/edit','thuong-hieu/create') ? 'activeli' : '' }}" href="{{route('thuong-hieu.index')}}"><i
                data-feather="square"></i> Nhà Cung Cấp </a>
              </li>

            </ul>
          </li>
          <li class="dropdown {{ request()->is('don-hang','don-hang/*/edit') ? 'active' : '' }}">
            <a href="" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="clipboard"></i><span>QUẢN LÍ ĐƠN HÀNG</span></a>
                <ul class="dropdown-menu active">
                  <li><a class="nav-link {{ request()->is('don-hang','don-hang/*/edit') ? 'activeli' : '' }}" href="{{route('don-hang.index')}}"><i
                    data-feather="clipboard"></i> Đơn Hàng </a>
                  </li>
                </ul>
              </li>

          <li class="dropdown   ">
            <a href="" class="menu-toggle nav-link has-dropdown"><i
                data-feather="users"></i><span>NGƯỜI DÙNG</span></a>
            <ul class="dropdown-menu ">
              <li><a class="nav-link {{ request()->is('users','users/*/edit','users/create') ? 'activeli' : '' }}" href="{{route('users.index')}}"><i
                data-feather="user-check"></i> Quản Trị Viên </a></li>
            <li><a class="nav-link" href=""><i
              data-feather="user"></i> Khách Hàng </a></li>
            <li><a class="nav-link{{ request()->is('thongbao','thongbao/*/edit','thongbao/create') ? 'activeli' : '' }}" href="{{route('thongbao.index')}}"><i
              data-feather="user"></i> Thông Báo </a></li>
            </ul>
          </li>

          <li class="dropdown {{ request()->is($link2) ? 'active' : '' }}">
            <a href="" class="menu-toggle nav-link has-dropdown"><i
                data-feather="bold"></i><span>QUẢN LÍ BLOG</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link {{ request()->is('loai-blog','loai-blog/*/edit','loai-blog/create') ? 'activeli' : '' }}" href="{{route('loai-blog.index')}}"><i
                data-feather="square"></i> Loại blog </a>
              </li>
            <li><a class="nav-link {{ request()->is('blog','blog/*/edit','blog/create') ? 'activeli' : '' }}" href="{{route('blog.index')}}"><i
              data-feather="edit"></i> Blog </a></li>
            </ul>
          </li>

        <li class="dropdown {{ request()->is($link3) ? 'active' : '' }}">
            <a href="" class="menu-toggle nav-link has-dropdown"><i
                data-feather="layout"></i><span>QUẢN LÍ SITE</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link {{ request()->is('info','info/*/edit','info/create') ? 'activeli' : '' }}" href="{{route('info.index')}}"><i
                data-feather="info"></i> THÔNG TIN SITE </a>
              </li>
              <li><a class="nav-link {{ request()->is('sns','sns/*/edit','sns/create') ? 'activeli' : '' }}" href="{{route('sns.index')}}"><i
                data-feather="link-2"></i> LIÊN KẾT MẠNG XÃ HỘI </a>
              </li>
            </ul>
          </li>



          <li class="dropdown {{ request()->is('tuyendung','tuyendung/*/edit','tuyendung/create') ? 'active' : '' }}">
          <a href="" class="menu-toggle nav-link has-dropdown"><i
                data-feather="bell"></i><span>TIN TUYỂN DỤNG</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('tuyendung.index')}}" class="nav-link  {{ request()->is('tuyendung') ? 'activeli' : '' }}" href=""><i
                data-feather="list"></i> Danh Sách Tin </a></li>
              <li><a href="{{route('tuyendung.create')}}" class="nav-link  {{ request()->is('tuyendung/create') ? 'activeli' : '' }}" href=""><i
              data-feather="plus-square"></i> Tuyển Vị Trí Mới </a></li>
            </ul>
          </li>

          <li class="dropdown  {{ request()->is('quang-cao','quang-cao/*/edit', 'quang-cao/create') ? 'active' : '' }}">
            <a href="" class="menu-toggle nav-link has-dropdown"><i
                data-feather="globe"></i><span>QUẢNG CÁO</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link {{ request()->is('quang-cao') ? 'activeli' : '' }}" href="{{route('quang-cao.index')}}"><i
                data-feather="list"></i> Danh Sách  </a></li>
            <li><a class="nav-link {{ request()->is('quang-cao/create') ? 'activeli' : '' }}" href="{{route('quang-cao.create')}}"><i
              data-feather="plus-square"></i> Thêm Quảng Cáo</a></li>
            </ul>
          </li>

          <li class="dropdown  {{ request()->is('counpon','counpon/*/edit', 'counpon/create') ? 'active' : '' }}">
          <a href="{{route('counpon.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="gift"></i><span>MÃ KHUYẾN MÃI</span></a>
          <ul class="dropdown-menu ">
              <li><a class="nav-link {{request()->is('counpon') ? 'activeli' : ''}}" href="{{route('counpon.index')}}"><i
                data-feather="list"></i> Danh Sách Mã KM </a></li>
            <li><a class="nav-link {{request()->is('counpon/create') ? 'activeli' : ''}}" href="{{route('counpon.create')}}"><i
              data-feather="plus-square"></i> Thêm Mã KM </a></li>
            </ul>
          </li>

          <li class=" {{ request()->is('email-kh') ? 'active' : '' }}">
          <a href="{{route('emailkh')}}" class=" nav-link"><i
                data-feather="mail"></i><span> EMAIL KH</span></a>

          </li>

          <li class="  {{ request()->is('danhgia','danhgia/*/edit', 'danhgia/create') ? 'active' : '' }}">
            <a href="" class=" nav-link "><i
                data-feather="package"></i><span>KHO HÀNG</span></a>
          </li>
    </aside>
  </div>
