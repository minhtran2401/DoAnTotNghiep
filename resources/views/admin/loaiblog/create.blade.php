@extends('admin.layoutadmin')
@section('pagetitle', "THÊM LOẠI BLOG MỚI")
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
                    <li class="breadcrumb-item"><a href="{{route('loai-blog.index')}}"><i class="far fa-file"></i> LOẠI BLOG</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM LOẠI BLOG</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM LOẠI BLOG</h4>
        <div class="block-header">
        <div class="container">
          
               
            <div class="cart">
                <form id="form_validation" method="POST" action="{{route('loai-blog.store')}}" enctype="multipart/form-data"  >
                    {{csrf_field()}}
                    <div class="form-group form-float">
                        <label>Tên Loại Blog</label>
                        <input type="text" class="form-control" placeholder="" name="name_loaiblog">
                        @foreach($errors->get('name_loaiblog') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                      </div>

                   
                  
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" checked="" >
                            <label class="form-check-label" for="Hien">Hiện</label>
                        </div>                                
                        <div class="form-check form-check-inline">
                            <input type="radio" name="Anhien" id="An" class="with-gap" value="0" >
                            <label class="form-check-label" for="An">Ẩn</label>
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


