@extends('admin.layoutadmin')
@section('pagetitle', "SỬA LOẠI SẢN PHẨM")
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
                  <li class="breadcrumb-item"><a href="{{route('loai-san-pham.index')}}"><i class="far fa-file"></i> LOẠI SẢN PHẨM</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA LOẠI SẢN PHẨM</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA TÊN LOẠI SẢN PHẨM</h4>
       
        <div class="container">
          
               
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('loai-san-pham.update',$row->id_loaisp)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row" >

                      <div class="col-md-6">

                      <div class="form-group col-md-12">
                        <label for="name_loaisp">Tên Loại Sản Phẩm</label>
                      <input type="text" class="form-control" value="{{$row->name_loaisp}}" placeholder="" name="name_loaisp" >
                      @foreach($errors->get('name_loaisp') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                    </div>

                    <div class="form-group col-md-12">
                      <label for="name_nhomsp">Nhóm Sản Phẩm</label>
                      <select name="id_nhomsp" class="form-control">
                      
                        @php
                              $kq = App\NhomSanPham::select("id_nhomsp", "name_nhomsp")->get();
                          @endphp
                          @foreach ($kq as $nsp)
                              @if ($row->id_nhomsp == $nsp->id_nhomsp)
                                  <option value='{{$row->id_nhomsp}}'
                                          selected>{{$nsp->name_nhomsp}}</option>
                              @else
                                  <option value='{{$nsp->id_nhomsp}}'>{{$nsp->name_nhomsp}}</option>
                              @endif
                          @endforeach
                      </select>
                      @foreach($errors->get('id_nhomsp') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                  </div>
              
                    <div class="form-group col-md-12">
                      <label for="">Hình Nhóm Sản Phẩm</label>
                      <input type="file" class="form-control" name="icon_loaisp">
                      @foreach($errors->get('icon_loaisp') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                     </div>
              
                     <div class="form-group col-md-12">
                      <label for="hinh_loaisp">Icon Nhóm Sản Phẩm</label>
                    <input type="text" class="form-control" value="{{$row->hinh_loaisp}}" placeholder="" name="hinh_loaisp" >
                  </div>

                    <div class="form-group col-md-12">
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

                <div class="form-group col-md-6 ">
                  <span>  Icon Loại Sản Phẩm (!! Copy code bỏ vào ô nhập !! )</span>
                  <div class="col-md-12 row">
                  <ul class="col-md-6">
                    <li><i class="biolife-icon icon-fruits"></i><a href="#"> Trái cây</a> | <code>fruits</code> <button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-broccoli-1"></i><a href="#"> Rau</a> | <code>broccoli-1</code><button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-grape"></i> <a href="#">Chùm nho</a> | <code>grape</code> <button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-fish"></i><a href="#"> Cá</a> | <code>fish</code><button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-honey"></i><a href="#"> Mật ong </a> | <code>honey</code><button class="copy-btn">copy</button> </li>
                    <li><i class="biolife-icon icon-fast-food"></i> <a href="#"> Thức ăn nhanh</a> | <code>fast-food</code> <button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-beef"></i><a href="#"> Thịt Bò</a> | <code>beef</code><button class="copy-btn">copy</button> </li>
                    <li><i class="biolife-icon icon-onions"></i><a href="#"> Hành tây</a> | <code>onions</code><button class="copy-btn">copy</button> </li>
                    </ul>
                   
                  <ul class="col-md-6">
                 
                    <li><i class="biolife-icon icon-avocado"></i><a href="#"> Đu đủ</a> | <code>avocado</code><button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-fresh-juice"></i><a href="#"> Nước ép</a> | <code>fresh-juice</code><button class="copy-btn">copy</button> </li>
                    <li><i class="biolife-icon icon-lemon"></i><a href="#"> Chanh</a> | <code>lemon</code><button class="copy-btn">copy</button> </li>
                    <li><i class="biolife-icon icon-grape2"></i><a href="#"> Nho 2 </a> | <code>grape2</code><button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-blueberry"></i><a href="#"> Việt quất </a> | <code>blueberry</code><button class="copy-btn">copy</button> </li>
                    <li><i class="biolife-icon icon-orange"></i><a href="#"> Cam </a> | <code>orange</code> <button class="copy-btn">copy</button></li>
                    <li><i class="biolife-icon icon-broccoli"></i><a href="#"> Rau 2 </a> | <code>brocoli</code><button class="copy-btn">copy</button> </li>
                  </ul>
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
 
