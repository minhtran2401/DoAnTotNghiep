@extends('admin.layoutadmin')
@section('pagetitle', "SỬA THÔNG TIN SITE")
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
                  <li class="breadcrumb-item"><a href="{{route('info.index')}}"><i class="far fa-file"></i> THÔNG TIN SITE</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA THÔNG TIN SITE</li>
                  </ol>
                </nav>
            </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA THÔNG TIN SITE</h4>
       
        <div class="container">
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('info.update',$row->id)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row">
                        

                        <div class="form-group container row col-md-7">
                            <div class="col-md-2">
                              <div class="chocolat-parent">
                                <a href="{{asset('siteinfo')}}/{{$row->sitelogo}}" class="chocolat-image"  title="{{$row->sitelogo}}">
                                  <div data-crop-image="75">
                                    <img alt="image" src="{{asset('siteinfo')}}/{{$row->sitelogo}}"  class="avatar avatar-xl">
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="sitelogo">
                                @foreach($errors->get('sitelogo') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="sitename">Tên site</label>
                          <input type="text" class="form-control" value="{{$row->sitename}}" placeholder="" name="sitename" >
                          @foreach($errors->get('sitename') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>

                        <div class="form-group col-md-6">
                          <label for="introduction">Giới thiệu</label>
                          <input type="text" class="form-control" value="{{$row->introduction}}" placeholder="" name="introduction" >
                          @foreach($errors->get('introduction') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="contactemail">Email</label>
                          <input type="text" class="form-control" value="{{$row->contactemail}}" placeholder="" name="contactemail" >
                          @foreach($errors->get('contactemail') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="contactphone">Số điện thoại</label>
                          <input type="text" class="form-control" value="{{$row->contactphone}}" placeholder="" name="contactphone" >
                          @foreach($errors->get('contactphone') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="address">Địa chỉ</label>
                          <input type="text" class="form-control" value="{{$row->address}}" placeholder="" name="address" >
                          @foreach($errors->get('address') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="contactphone2">Số điện thoại 2</label>
                          <input type="text" class="form-control" value="{{$row->contactphone2}}" placeholder="" name="contactphone2" >
                          @foreach($errors->get('contactphone2') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="address2">Địa chỉ 2</label>
                          <input type="text" class="form-control" value="{{$row->address2}}" placeholder="" name="address2">
                          @foreach($errors->get('address2') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="contactphone3">Số điện thoại 3</label>
                          <input type="text" class="form-control" value="{{$row->contactphone3}}" placeholder="" name="contactphone3" >
                          @foreach($errors->get('contactphone3') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="address3">Địa chỉ 3</label>
                          <input type="text" class="form-control" value="{{$row->address3}}" placeholder="" name="address3">
                          @foreach($errors->get('address3') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="googlemap">Mã nhúng map google</label>
                          <input type="text" class="form-control" value="{{$row->googlemap}}" placeholder="" name="googlemap" >
                          @foreach($errors->get('googlemap') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
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
 
