@extends('admin.layoutadmin')
@section('pagetitle', "SỬA BLOG")
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
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA BLOG</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>SỬA BLOG</h4>
              
             

        <div class="block-header">
        </div>
        <div class="container">
            <div class="cart">
                <form class="" id="form_validation" method="POST" action="{{route('blog.update',$row->id_blog)}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {!! method_field('patch') !!}

                    <div class="form-group row" >
                    <div class="col-md-6 row">
                    <div class="form-group col-md-6">
                        <label for="name_blog">Tên Blog</label>
                    <input type="text" class="form-control" placeholder="Tên" value="{{$row->name_blog}}" name="name_blog">
                    @foreach($errors->get('name_blog') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                    <input type="text" hidden class="form-control"  value="{{ auth::id() }}" name="id">
                    <input type="text" hidden class="form-control"  value="{{$row->luotxem}}" name="luotxem">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name_blog">Tên Thể Loại</label>
                        <select  name="id_loaiblog" class="form-control">
                            <option value="0">Chọn thể loại</option>

                                @php
                                $kq = App\LoaiBlog::select("id_loaiblog", "name_loaiblog")->get();  
                                @endphp
                                @foreach ($kq as $theloai)
                                @if ($row->id_loaiblog == $theloai->id_loaiblog)
                        <option value='{{$theloai->id_loaiblog}}' selected >{{$theloai->name_loaiblog}}</option>  
                        @else
                        <option value='{{$theloai->id_loaiblog}}'>{{$theloai->name_loaiblog}}</option>  
                        @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="hinh_blog">Hình mô tả</label>
                    <input type="file" class="form-control" value="{{$row->img_blog}}"  name="img_blog">
                    @foreach($errors->get('img_blog') as $error)
                        <span class="help-block">{{ $error }}</span> 
                      @endforeach
                      </div>

                      <div class="form-group col-md-3">
                        <label for="image">Hình cũ</label>
                        <div class="chocolat-parent">
                            <a href="{{asset('imgblog')}}/{{$row->img_blog}}" class="chocolat-image"  title="{{$row->name_blog}}">
                              <div data-crop-image="75">
                              <img alt="image" src="{{asset('imgblog')}}/{{$row->img_blog}}"  class="avatar avatar-xl">
                              </div>
                            </a>
                          </div>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="time_blog">Ngày Đăng</label>
                          <input type="date" class="form-control datepicker"  name="time_blog" >
                      </div>

                      <div class="form-group col-md-12">
                        <label for="Tag">Tag</label>
                      <input type="text" class="form-control " value="{{$row->tag_blog}}"  placeholder="Các tag ngăn cách nhau bời dấu phẩy"  name="tag_blog" >
                      </div>

                      
                </div>

                <div class="col-md-6">   
                    <div class="form-group col-md-12">
                        <label for="tomtat_blog"> Tóm Tắt </label>
                        <textarea class="summernote" name="tomtat_blog" id="" cols="30" rows="10">{{$row->tomtat_blog}}</textarea>
                        @foreach($errors->get('tomtat_blog') as $error)
                        <span class="badge badge-danger">{{ $error }}</span> 
                      @endforeach
                        </div>
                </div>

                </div>

                <div class="col-sm-md">
                    <label for="noidung_blog"> Nội Dung </label>
                        <textarea name="noidung_blog" class="summernote">{{$row->noidung_blog}}</textarea>
                        @foreach($errors->get('tomtat_blog') as $error)
                        <span class="badge badge-danger">{{ $error }}</span> 
                      @endforeach
                </div>


                <div class="col-md-12 row">
                <div class="form-group col-md-4">
                    <div class="form-check form-check-inline">
                        <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" @if ($row->Anhien == 1) checked @endif >
                        <label class="form-check-label" for="Hien">Hiện</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="Anhien" id="An" class="with-gap" value="0" @if ($row->Anhien == 0) checked  @endif >
                        <label class="form-check-label" for="An">Ẩn</label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="form-check form-check-inline">
                      <input type="radio" name="noibat" id="co" class="with-gap" value="1" @if ($row->noibat == 1) checked @endif >
                      <label class="form-check-label" for="co">Hiện</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" name="noibat" id="khong" class="with-gap" value="0" @if ($row->noibat == 0) checked  @endif >
                      <label class="form-check-label" for="khong">Ẩn</label>
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
