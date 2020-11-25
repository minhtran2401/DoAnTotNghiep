@extends('admin.layoutadmin')
@section('pagetitle', "SỬA THƯƠNG HIỆU")
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
                  <li class="breadcrumb-item"><a href="{{route('thuong-hieu.index')}}"><i class="far fa-file"></i> THƯƠNG HIỆU</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA THƯƠNG HIỆU</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA THƯƠNG HIỆU</h4>
       
        <div class="container">
          
               
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('thuong-hieu.update',$row->id_thuonghieu)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row">
                      <div class="form-group container row">
                        <div class="col-md-2">
                        <div class="chocolat-parent">
                          <a href="{{asset('hinhthuonghieu')}}/{{$row->img_thuonghieu}}" class="chocolat-image"  title="{{$row->name_thuonghieu}}">
                            <div data-crop-image="75">
                            <img alt="image" src="{{asset('hinhthuonghieu')}}/{{$row->img_thuonghieu}}"  class="avatar avatar-xl">
                            </div>
                          </a>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="name_thuonghieu">Tên Thương Hiệu</label>
                        <input type="text" class="form-control" value="{{$row->name_thuonghieu}}" placeholder="" name="name_thuonghieu">
                        @foreach($errors->get('name_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>
                      <div class="form-group col-md-6">
                        <label for="sdt_thuonghieu">Điện Thoại Thương Hiệu</label>
                        <input type="text" class="form-control" value="{{$row->sdt_thuonghieu}}" placeholder="" name="sdt_thuonghieu">
                        @foreach($errors->get('sdt_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>
                      <div class="form-group col-md-6">
                        <label for="link_thuonghieu">Liên Kết Thương Hiệu</label>
                        <input type="text" class="form-control" value="{{$row->link_thuonghieu}}" placeholder="" name="link_thuonghieu">
                        @foreach($errors->get('link_thuonghieu') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>

                      <div class="col-md-10">
                        <input type="file" class="form-control" name="img_thuonghieu">
                      </div>
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
 
