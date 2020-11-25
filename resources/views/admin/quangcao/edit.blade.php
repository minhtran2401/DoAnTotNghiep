@extends('admin.layoutadmin')
@section('pagetitle', "SỬA SẢN PHẨM QUẢNG CÁO")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
               
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-success text-white-all">
                  <li class="breadcrumb-item"><a href="{{asset('/')}}"><i class="fas fa-tachometer-alt"></i> TỔNG QUAN</a></li>
                  <li class="breadcrumb-item"><a href="{{route('quang-cao.index')}}"><i class="far fa-file"></i> SẢN PHẨM QUẢNG CÁO</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA SẢN PHẨM QUẢNG CÁO</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA QUẢNG CÁO</h4>
       
        <div class="container">
          <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('quang-cao.update',$row->id_quangcao)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row" >
                    <div class="form-group col-md-6">
                      <label for="name_sp">Sản Phẩm Quảng Cáo</label>
                      @if($row->loai_quangcao == 2)
                      <select name="id_sanpham" class="form-control">
                          @php
                              $kq = App\SanPham::select("id_sanpham", "name_sp")->get();
                          @endphp
                         
                          @foreach ($kq as $spqc)
                              @if ($row->id_sanpham == $spqc->id_sanpham)
                                  <option value='{{$row->id_sanpham}}'selected>{{$spqc->name_sp}}</option>            
                              @else
                              <option value='{{$spqc->id_sanpham}}'>{{$spqc->name_sp}}</option>            
                              @endif
                          @endforeach
                        </select>
                          @elseif($row->loai_quangcao == 1)
                          <input type="text" placeholder="Đây là banner trang chủ, nên trường này bị vô hiệu hóa " disabled class="form-control">
                          @else
                          <input type="text" placeholder="Đây là quảng cáo blog, nên trường này bị vô hiệu hóa " disabled class="form-control">
                          @endif
                      
                  </div>
                    <div class="form-group col-md-6">
                      <label for="name_blog">Bài Viết Quảng Cáo</label>
                      @if($row->loai_quangcao == 3)
                      <select name="id_blog" class="form-control">
                        @php
                              $kq = App\Blog::select("id_blog", "name_blog")->get();
                          @endphp
                          @foreach ($kq as $bvqc)
                              @if ($row->id_blog == $bvqc->id_blog)
                                  <option value='{{$row->id_blog}}'
                                          selected>{{$bvqc->name_blog}}</option>
                              @else
                                  <option value='{{$bvqc->id_blog}}'>{{$bvqc->name_blog}}</option>
                              @endif
                          @endforeach
                      </select>
                      @elseif($row->loai_quangcao == 1)
                      <input type="text" placeholder="Đây là banner trang chủ, nên trường này bị vô hiệu hóa" disabled class="form-control">
                      @else
                      <input type="text" placeholder="Đây là banner quảng cáo sản phẩm giảm giá, nên trường này bị vô hiệu hóa" disabled class="form-control">
                      @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name_quangcao">Tên Quảng Cáo</label>
                  <input type="text" value="{{$row->name_quangcao}}" class="form-control" name="name_quangcao" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mota_quangcao">Mô Tả Quảng Cáo</label>
                  <input type="text" value="{{$row->mota_quangcao}}" class="form-control" name="mota_quangcao" >
                  </div>

                  <div hidden>
                  <input type="text" name="loai_quangcao" value="{{$row->loai_quangcao}}">
                  </div>

                    <div class="form-group col-md-12">
                      <label for="quangcao_banner">Hình ảnh quảng cáo</label>
                      <input type="file" class="form-control" name="banner_quangcao">
                      <img class="img-fluid mt-3" src="{{asset('bannerquangcao')}}/{{$row->banner_quangcao }}" alt="">
                    
                    </div>


                    <div class="form-group col-md-6">
                      <div class="col-md-12"><label for="">Ẩn hoặc Hiện </label></div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1"
                                 @if ($row->Anhien == 1) checked @endif >
                          <label class="form-check-label" for="Hien">Hiện</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="Anhien" id="An" class="with-gap" value="0"
                                 @if ($row->Anhien == 0) checked @endif >
                          <label class="form-check-label" for="An">Ẩn</label>
                      </div>
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
 
