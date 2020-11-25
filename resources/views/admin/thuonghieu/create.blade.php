@extends('admin.layoutadmin')
@section('pagetitle', "THÊM THƯƠNG HIỆU")
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
                    <li class="breadcrumb-item"><a href="{{route('thuong-hieu.index')}}"><i class="far fa-file"></i> THƯƠNG HIỆU</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM THƯƠNG HIỆU</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM THƯƠNG HIỆU</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
              <form method="POST" action="{{route('thuong-hieu.store')}}" enctype="multipart/form-data" >
                @csrf
                    <div class="form-group row" >
                      <div class="form-group col-md-12">
                          <label for="img_thuonghieu">Hình Ảnh Thương Hiệu</label>
                          <input type="file" class="form-control" name="img_thuonghieu">
                          @foreach($errors->get('img_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>
                      <div class="form-group col-md-6">
                          <label for="name_thuonghieu">Tên Thương Hiệu</label>
                          <input type="text" class="form-control" placeholder="Tên Thương Hiệu" name="name_thuonghieu">
                          @foreach($errors->get('name_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>
                      <div class="form-group col-md-6">
                          <label for="sdt_thuonghieu">Điện Thoại Thương Hiệu</label>
                          <input type="text" class="form-control" placeholder="Điện Thoại Thương Hiệu" name="sdt_thuonghieu">
                          @foreach($errors->get('sdt_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>
                      <div class="form-group col-md-6">
                          <label for="link_thuonghieu">Liên Kết Thương Hiệu</label>
                          <input type="text" class="form-control" placeholder="Liên Kết Thương Hiệu" name="link_thuonghieu">
                          @foreach($errors->get('link_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
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


