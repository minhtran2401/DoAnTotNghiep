@extends('admin.layoutadmin')
@section('pagetitle', "SỬA KHO HÀNG")
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
                  <li class="breadcrumb-item"><a href="{{route('nhap-kho-hang.index')}}"><i class="far fa-file"></i> KHO HÀNG</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA KHO HÀNG</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA KHO HÀNG</h4>
       
        <div class="container">
          
               
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('nhap-kho-hang.update',$row->sku)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row">
                      <div class="form-group container row">
                        <div class="form-group col-md-6">
                          <label for="khohang_name">Tên Hàng</label>
                          <input type="text" class="form-control" value="{{$row->khohang_name}}" placeholder="Tên Hàng" name="khohang_name">
                          {{-- @foreach($errors->get('snslink') as $error)
                                <span class="badge badge-danger">{{ $error }}</span>
                              @endforeach --}}
                        </div>
                        <div class="form-group col-md-6">
                          <label for="khohang_ngaynhap">Ngày Nhập</label>
                          <input type="date" class="form-control" value="{{$row->khohang_ngaynhap}}" placeholder="Ngày Nhập" name="khohang_ngaynhap">
                          {{-- @foreach($errors->get('snslink') as $error)
                                <span class="badge badge-danger">{{ $error }}</span>
                              @endforeach --}}
                        </div>
                        <div class="form-group col-md-6">
                          <label for="khohang_hsd">Hạn Sử Dụng</label>
                          <input type="date" class="form-control" value="{{$row->khohang_hsd}}" placeholder="Hạn Sử Dụng" name="khohang_hsd">
                          {{-- @foreach($errors->get('snslink') as $error)
                                <span class="badge badge-danger">{{ $error }}</span>
                              @endforeach --}}
                        </div>

                        <div class="row form-group col-md-6">
                          <div class=" form-group col-md-6">
                          <label for="khohang_soluong">Số Lượng Nhập</label>
                          <input type="text" class="form-control" value="{{$row->khohang_soluong}}" placeholder="Số lượng nhập" name="khohang_soluong" >
                          {{-- @foreach($errors->get('snslink') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach --}}
                          </div>
                          <div class="form-group col-md-6">
                            <label for="khohang_donvi">Đơn vị tính</label>
                               <select  name="khohang_donvi" class="form-control">
                                @foreach ($dvt as $dvt)
                                @if($row->khohang_donvi == $dvt->name_donvi )
                                <option value='{{$dvt->name_donvi}}' selected>{{$dvt->name_donvi}}</option>  
                                @else
                                <option value='{{$dvt->name_donvi}}'>{{$dvt->name_donvi}}</option>  
                                @endif
                                @endforeach 
                             </select>
                           </div>
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
 
