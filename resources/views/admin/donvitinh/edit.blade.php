@extends('admin.layoutadmin')
@section('pagetitle', "SỬA ĐƠN VỊ")
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
                  <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="fas fa-tachometer-alt"></i> TỔNG QUAN</a></li>
                  <li class="breadcrumb-item"><a href="{{route('donvitinh.index')}}"><i class="far fa-file"></i> ĐƠN VỊ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA ĐƠN VỊ</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA TÊN ĐƠN VỊ</h4>
       
        <div class="container">
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('donvitinh.update',$row->id_donvitinh)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row">
                      <div class="form-group col-md-6">
                        <label for="name_donvi">Tên Đơn Vị</label>
                        <input type="text" class="form-control" value="{{$row->name_donvi}}" placeholder="" name="name_donvi" >
                        @foreach($errors->get('name_donvi') as $error)
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
 
