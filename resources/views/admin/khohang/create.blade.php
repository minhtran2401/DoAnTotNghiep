@extends('admin.layoutadmin')
@section('pagetitle', "THÊM HÀNG")
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
                    <li class="breadcrumb-item"><a href="{{route('nhap-kho-hang.index')}}"><i class="far fa-file"></i> KHO HÀNG</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM HÀNG</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM HÀNG</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
              <form method="POST" action="{{route('nhap-kho-hang.store')}}" enctype="multipart/form-data" >
                @csrf
                    <div class="form-group row" >
                      <div class="form-group col-md-6">
                          <label for="khohang_name">Tên hàng</label>
                          <input type="text" class="form-control" placeholder="Tên hàng" name="khohang_name" >
                          @foreach($errors->get('khohang_name') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                      </div>
                      <div class="form-group col-md-6">
                          <label for="khohang_ngaynhap">Ngày nhập</label>
                          <input type="date" class="form-control" placeholder="Ngày nhập" name="khohang_ngaynhap" >
                          @foreach($errors->get('khohang_ngaynhap') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                      </div>
                      <div class="form-group col-md-6">
                          <label for="khohang_hsd">Hạn sử dụng</label>
                          <input type="date" class="form-control" placeholder="Hạn sử dụng" name="khohang_hsd" >
                          @foreach($errors->get('khohang_hsd') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                      </div>
                      <div class="row form-group col-md-6">
                        <div class=" form-group col-md-6">
                        <label for="khohang_soluong">Số Lượng Nhập</label>
                        <input type="text" class="form-control" placeholder="Số lượng nhập" name="khohang_soluong" >
                        @foreach($errors->get('khohang_soluong') as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="khohang_donvi">Đơn vị tính</label>
                             <select  name="khohang_donvi" class="form-control">
                                   @foreach ($dvt as $dvt)
                                   <option value='{{$dvt->name_donvi}}'>{{$dvt->name_donvi}}</option>  
                                   @endforeach 
                           </select>
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


