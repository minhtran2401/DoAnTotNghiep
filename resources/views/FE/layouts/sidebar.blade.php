<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="vertical-menu vertical-category-block">
                <div class="block-title">
                    <span class="menu-icon">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </span>
                    <span class="menu-title">Tất Cả Sản Phẩm</span>
                    <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                </div>
                <div class="wrap-menu">
                    <ul class="menu clone-main-menu">
                        @foreach ($sidebar as $b)
                        <li class="menu-item menu-item-has-children has-child">
                        <a href="javascript:0" class="menu-name" ><i class="biolife-icon icon-{{$b->hinh_nhomsp}}"></i>{{$b->name_nhomsp}}</a>
                            <ul class="sub-menu">
                                <?php
                                       $loaisp = App\NhomSanPham::find($b->id_nhomsp)->ktloaisp;
                                ?>
                                @foreach ($loaisp as $l)  
                            <li class="menu-item"><a href="{{route('cateprod',$l->slug_loaisp)}}">{{$l->name_loaisp}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 padding-top-2px">
            <div class="header-search-bar layout-01">
            <form action="{{ route('searchsp')}}" method="GET" class="form-search typeahead" name="desktop-seacrh" role="search">
                    <input type="search" name="q" id="searchsp" class="input-text searchspz " placeholder="Tìm kiếm theo tên hoặc giá..." autocomplete="off">
                    <select name="category">
                        <option value="0" selected>Tất cả danh mục</option>
                            @foreach ($menuloaisp as $l)
                                <option value="{{$l->id_loaisp}}">{{$l->name_loaisp}}</option>
                            @endforeach
                    </select>
                    <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                </form>
            </div>

                  
            <div class="live-info">
            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">+{{$info->contactphone}}</b></p>
                <p class="working-time">Thứ 2-6: 8:30am-7:30pm; Thứ 7-CN: 9:30am-4:30pm</p>
            </div>
        </div>
    </div>
</div>