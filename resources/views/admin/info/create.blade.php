@extends('admin.layoutadmin')
@section('pagetitle', "THÊM THÔNG TIN SITE")
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
                    <li class="breadcrumb-item"><a href="{{route('info.index')}}"><i class="far fa-file"></i> THÔNG TIN SITE</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM THÔNG TIN SITE</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
           
              <h4>THÊM THÔNG TIN SITE</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
            <form method="POST" action="{{route('info.store')}}" enctype="multipart/form-data" >
              @csrf
                  <div class="form-group row col-md-12" >
                    <div class="form-group col-md-6">
                        <label for="sitename">Tên Site</label>
                        <input type="text" class="form-control" placeholder="Tên site" name="sitename" required>
                    </div>
               
                  <div class="form-group col-md-6">
                      <label for="sitelogo">Logo site</label>
                      <input type="file" class="form-control" name="sitelogo" required>
                  </div>
                
                    <div class="form-group col-md-6">
                        <label for="introduction">Giới thiệu</label>
                        <input type="text" class="form-control" placeholder="Giới thiệu" name="introduction" required>
                    </div>
              
                
                    <div class="form-group col-md-6">
                        <label for="contactemail">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="contactemail" required>
                    </div>
                
            
                    <div class="form-group col-md-4">
                        <label for="contactphone">Số điện thoại</label>
                        <input type="text" class="form-control" placeholder="Số điện thoại" name="contactphone" required>
                    </div>
                 
                
                    <div class="form-group col-md-4">
                        <label for="contactphone2">Số điện thoại 2</label>
                        <input type="text" class="form-control" placeholder="Số điện thoại 2" name="contactphone2" >
                    </div>
                 
                
                    <div class="form-group col-md-4">
                        <label for="contactphone3">Số điện thoại 3</label>
                        <input type="text" class="form-control" placeholder="Số điện thoại 3" name="contactphone3" >
                    </div>
                
            
                    <div class="form-group col-md-4">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Địa chỉ" name="address" required>
                    </div>
                 
              
                    <div class="form-group col-md-4">
                        <label for="address2">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Địa chỉ 2" name="address2" >
                    </div>
                
                 
                    <div class="form-group col-md-4">
                        <label for="address3">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Địa chỉ 3" name="address3">
                    </div>
                  
                 
                    <div class="form-group col-md-12">
                        <label for="googlemap">Google map embeder</label>
                        <input type="text" class="form-control" placeholder="https://....." name="googlemap" required>
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


