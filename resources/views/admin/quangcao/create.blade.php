@extends('admin.layoutadmin')
@section('pagetitle', "THÊM SẢN PHẨM QUẢNG CÁO")
@section('main')

<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
            <div class="row">
              <div class="col-lg-7 col-md-6 col-sm-12">
                 
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-success text-white-all">
                    <li class="breadcrumb-item"><a href="{{asset('/')}}"><i class="fas fa-tachometer-alt"></i> TỔNG QUAN</a></li>
                    <li class="breadcrumb-item"><a href="{{route('quang-cao.index')}}"><i class="far fa-file"></i> SẢN PHẨM QUẢNG CÁO</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM SẢN PHẨM QUẢNG CÁO</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM SẢN PHẨM QUẢNG CÁO</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
              <form method="POST" action="{{route('quang-cao.store')}}" enctype="multipart/form-data" >
                @csrf
                  <div class="form-group row" >
                    <div class="form-group col-md-12">
                      <label for="quangcao_banner">Banner Quảng Cáo</label>
                      <small>(*Để có chất lượng tốt nhất , hãy dùng : 620x485 cho ảnh sản phẩm || 1920x550 cho ảnh banner || 670x535 cho banner blog  )</small>
                      <input type="file" class="form-control" name="banner_quangcao" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name_quangcao">Tên Quảng Cáo</label>
                      <input type="text" class="form-control" name="name_quangcao" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="mota_quangcao">Mô tả Quảng Cáo</label>
                      <input type="text" class="form-control" name="mota_quangcao" >
                    </div>

                    <div class="form-group col-md-6">
                      <label for="id_sanpham">Sản Phẩm</label>
                      <select  name="id_sanpham" class="form-control">
                        <option value="">---Sản Phẩm---</option>
                      
                        <?php
                            $kq = App\SanPham::select("id_sanpham", "name_sp")->where('old_price_sp','!=',null)->get();
                            ?>
                            @foreach ($kq as $sanpham)
                              <option value='{{$sanpham->id_sanpham}}'>{{$sanpham->name_sp}}</option>  
                            @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="id_blog">Bài viết</label>
                      <select  name="id_blog" class="form-control">
                        <option value="">---Bài Viết---</option>
                        <?php
                            $kq = App\Blog::select("id_blog", "name_blog")->get();
                            ?>
                            @foreach ($kq as $blog)
                              <option value='{{$blog->id_blog}}'>{{$blog->name_blog}}</option>  
                            @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="loai_quangcao">Loại Quảng Cáo</label>
                      <select  name="loai_quangcao" class="form-control">
                        <option value="1">Banner trang chủ</option>
                        <option value="2">Sản phẩm giảm giá</option>
                        <option value="3">Bài viết hay</option>
                      </select>
                    </div>
                 
                    <div class="form-group col-md-6"> 
                      <div><label for="Anhien">Trạng Thái</label></div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="Anhien" id="hd" class="with-gap" value="1" checked="" >
                          <label class="form-check-label" for="hd">Hiện</label>
                      </div>                                
                      <div class="form-check form-check-inline">
                          <input type="radio" name="Anhien" id="dis" class="with-gap" value="0" >
                          <label class="form-check-label" for="dis">Ẩn</label>
                      </div>
                  </div>
                    </div>
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">LƯU DATABASE</button>
                    <button class="btn btn-danger" type="reset">HỦY</button>
                </form>
            </div>
            
        </div>
      </div>
      </div>
    </section>

   
  </div>

@endsection


