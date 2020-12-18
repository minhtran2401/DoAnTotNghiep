@extends('admin.layoutadmin')
@section('pagetitle', "SỬA THỂ LOẠI")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>ADMIN </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}"><i class="zmdi zmdi-home"></i> MiNhaTi</a></li>
                        <li class="breadcrumb-item active">CẬP NHẬT THÔNG TIN ADMIN</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
          
               
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('users.update',$row->id)}}" enctype="multipart/form-data" >
                {{csrf_field()}}
                {!! method_field('patch') !!}

                    <div class="form-group row" >

                      <div class="form-group col-md-6">
                      <input type="text" class="form-control" value="{{$row->name}}" placeholder="Họ Và Tên" name="name">
                      @foreach($errors->get('name') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                    </div>

                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Email" value="{{$row->email}}" name="email">
                    @foreach($errors->get('email') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                    </div>

                    <div class="form-group col-md-6">
                      <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" value="{{$row->phone}}"  placeholder="Số điện thoại" name="phone">
                    @foreach($errors->get('phone') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                    </div>

                

                    <div class="form-group col-md-6">
                      <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" value="{{md5($row->password)}}" placeholder="Mật Khẩu" name="password">
                    @foreach($errors->get('password') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                    </div>


                    <div class="form-group col-md-6">
                      <label for="avatar">Hình đại diện</label>
                      <input type="file" class="form-control" name="avatar">
                    </div>

                    
                    <div class="form-group col-md-6">
                      <label for="address">Địa Chỉ</label>
                    <input type="text" class="form-control" value="{{$row->address}}"  placeholder="Địa Chỉ" name="address">
                    @foreach($errors->get('address') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                    </div>


                    <div class="form-group col-md-6"> 
                      <div><label for="active">Trạng Thái</label></div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="active" id="hd" class="with-gap" value="1" @if ($row->active == 1) checked @endif >
                          <label class="form-check-label" for="hd">Hoạt Động</label>
                      </div>                                
                      <div class="form-check form-check-inline">
                          <input type="radio" name="active" id="dis" class="with-gap" value="0" @if ($row->active== 0) checked @endif >
                          <label class="form-check-label" for="dis">Vô Hiệu Hóa</label>
                      </div>
                  </div>
                  
                  <div class="form-group col-md-6"> 
                    <div><label for="active">Phân Quyền</label></div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="idgroup" id="boss" class="with-gap" value="1" @if ($row->idgroup == 1) checked @endif >
                        <label class="form-check-label" for="boss">Admin</label>
                    </div>                                
                    <div class="form-check form-check-inline">
                        <input type="radio" name="idgroup" id="admin" class="with-gap" value="0" @if ($row->idgroup == 0) checked @endif >
                        <label class="form-check-label" for="admin">Người dùng</label>
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
 
