@extends('admin.layoutadmin')
@section('pagetitle', "THÊM BLOG MỚI")
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
                    <li class="breadcrumb-item"><a href="{{route('blog.index')}}"><i class="far fa-file"></i>BLOG</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM BLOG MỚI</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM BLOG MỚI</h4>
              
             

        <div class="block-header">
        </div>
        <div class="container">
            <div class="cart">
                <form class="" id="form_validation" method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}

                    <div class="form-group row" >
                    <div class="col-md-6 row">
                    <div class="form-group col-md-6">
                        <label for="name_blog">Tên Blog</label>
                        <input type="text" class="form-control" placeholder="Tên" name="name_blog">
                        @foreach($errors->get('name_blog') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                    <input type="text" hidden class="form-control"  value="{{ auth::id() }}" name="id">
                    <input type="text" hidden class="form-control"  value="0" name="luotxem">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name_blog">Tên Thể Loại</label>
                        <select  name="id_loaiblog" class="form-control">
                          
                            <option value="0">Chọn thể loại</option>
                          
                            <?php
                                $kq = App\LoaiBlog::select("id_loaiblog", "name_loaiblog")->get();
                                ?>
                                @foreach ($kq as $theloai)
                        <option value='{{$theloai->id_loaiblog}}'>{{$theloai->name_loaiblog}}</option>  
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="image">Hình ảnh</label>
                          <input type="file" class="form-control"  name="img_blog" >
                          @foreach($errors->get('img_blog') as $error)
                        <span class="badge badge-danger">{{ $error }}</span> 
                      @endforeach
                      </div>
                      <div class="form-group col-md-12">
                        <label for="time_blog">Ngày Đăng</label>
                          <input type="date" class="form-control datepicker"  name="time_blog" >
                      </div>

                      <div class="form-group col-md-12">
                        <label for="Tag">Tag</label>
                          <input type="text" class="form-control " placeholder="Các tag ngăn cách nhau bời dấu phẩy"  name="tag_blog">
                          @foreach($errors->get('tag_blog') as $error)
                        <span class="badge badge-danger">{{ $error }}</span> 
                      @endforeach
                      </div>

                      
                </div>

                <div class="col-md-6">   
                    <div class="form-group col-md-12">
                        <label for="tomtat_blog"> Tóm Tắt </label>
                        <textarea class="summernote" name="tomtat_blog" id="" cols="30" rows="10"></textarea>
                        @foreach($errors->get('tomtat_blog') as $error)
                        <span class="badge badge-danger">{{ $error }}</span> 
                      @endforeach
                        </div>
                </div>

                </div>

                <div class="col-sm-md">
                    <label for="noidung_blog"> Nội Dung </label>
                        <textarea name="noidung_blog" class="summernote"></textarea>
                        @foreach($errors->get('noidung_blog') as $error)
                        <span class="badge badge-danger">{{ $error }}</span> 
                      @endforeach
                </div>



                 
                  
                <div class="col-md-12 row">
                    <div class="form-group col-md-4">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" checked="" >
                            <label class="form-check-label" for="Hien">Hiện</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="Anhien" id="An" class="with-gap" value="0" >
                            <label class="form-check-label" for="An">Ẩn</label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                      <div class="form-check form-check-inline">
                          <input type="radio" name="noibat" id="co" class="with-gap" value="1" checked="" >
                          <label class="form-check-label" for="co">Nổi Bật</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="noibat" id="khong" class="with-gap" value="0" >
                          <label class="form-check-label" for="khong">Tin Thường</label>
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
