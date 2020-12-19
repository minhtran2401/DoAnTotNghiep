@extends('admin.layoutadmin')
@section('pagetitle', "THÊM SẢN PHẨM")
@section('main')

<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
            <div class="row">
              <div class="col-lg-7 col-md-6 col-sm-12">
                 
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-success text-white-all">
                    <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="fas fa-tachometer-alt"></i> TỔNG QUAN</a></li>
                    <li class="breadcrumb-item"><a href="{{route('san-pham.index')}}"><i class="far fa-file"></i> SẢN PHẨM</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM SẢN PHẨM</li>
                    </ol>
                  </nav>
                  {{-- <h2> SẢN PHẨM</h2> --}}
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM SẢN PHẨM</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
              <form method="POST" action="{{route('san-pham.store')}}" enctype="multipart/form-data" >
                {{csrf_field()}}
                
                    <div class="form-group row" >
                      <div class="form-group row col-md-6">
                        <div class="form-group col-md-6">
                           <label for="name_sp">Tên Sản Phẩm</label>
                            {{-- <input type="text" class="form-control" placeholder="Tên Sản Phẩm" name="name_sp" > --}}
                            <select id="single" name="sku"  class="form-control">
                              @foreach ($kho as $kho)
                              <option value='{{$kho->sku}}'>{{$kho->khohang_name}}</option>  
                              @endforeach 
                              </select>
                              <input hidden type="text"  name="name_sp"  id="name_sp">
                            @foreach($errors->get('name_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                           
                              
                        </div>

                        <div>
                         
 

 
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="id_thuonghieu">Nhà Cung Cấp</label>
                             <select  name="id_thuonghieu" class="form-control">
                                   @foreach ($ncc as $ncc)
                                   <option value='{{$ncc->id_thuonghieu}}'>{{$ncc->name_thuonghieu}}</option>  
                                   @endforeach 
                           </select>
                         </div>
                        <div class="form-group col-md-6">
                            <label for="name_nhomsp">Nhóm Sản Phẩm</label>
                            <select  name="id_nhomsp" class="form-control">
                              <option value="0">---NHÓM SẢN PHẨM---</option>
                                  @foreach ($nhomsp as $nhomsp)
                                  <option value='{{$nhomsp->id_nhomsp}}'>{{$nhomsp->name_nhomsp}}</option>  
                                  @endforeach
                          </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="name_loaisp">Loại Sản Phẩm</label>
                            <select  name="id_loaisp" class="form-control">
                              <option value="0">---LOẠI SẢN PHẨM---</option>
                            

                          </select>
                        </div>

                        
                        <div class="form-group col-md-4">
                          <label for="old_price_sp">Giá Cũ (đ)</label>
                          <input type="text" class="form-control currency" placeholder="K sale thì để trống" name="old_price_sp">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="price_sp">Giá Mới (đ)</label>
                          <input type="text" class="form-control currency" placeholder="Giá hiện tại" name="price_sp" >
                          @foreach($errors->get('price_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-4">
                       <label for="id_donvitinh">Đơn vị tính</label>
                          <select  name="id_donvitinh" class="form-control">
                                @foreach ($dvt as $dvt)
                                <option value='{{$dvt->id_donvitinh}}'>{{$dvt->name_donvi}}</option>  
                                @endforeach 
                        </select>
                      </div>
                        

                    
                      </div>
                      <div class="form-group col-md-6">
                          <div class="form-group col-md-12">
                              <label for="img_sp">Hình Sản Phẩm</label>
                              <input type="file" class="form-control" name="img_sp" >
                              @foreach($errors->get('img_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                          </div>
                          <div class="form-group col-md-12 ">
                            <label for="detail_images">Hình chi tiết sản phẩm</label>
                            <br>
                          
                              <input type="file" class="form-control" name="txtSPImage1" value="{!! old('txtSPImage1') !!}" >
                              <div>
                                  {!! $errors->first('txtSPImage1') !!}
                              </div>
                              <br>
                              <input type="file" class="form-control" name="txtSPImage2" value="{!! old('txtSPImage2') !!}" >
                              <div>
                                  {!! $errors->first('txtSPImage2') !!}
                              </div>
                              <br>
                              <input type="file" class="form-control" name="txtSPImage3" value="{!! old('txtSPImage3') !!}" >
                              <div>
                                  {!! $errors->first('txtSPImage3') !!}
                              </div>
                              <br>
                              <input type="file" class="form-control" name="txtSPImage4" value="{!! old('txtSPImage4') !!}" >
                              <div>
                                  {!! $errors->first('txtSPImage4') !!}
                              </div>
                              <br>
                              <input type="file" class="form-control" name="txtSPImage5" value="{!! old('txtSPImage5') !!}" >
                              <div>
                                  {!! $errors->first('txtSPImage5') !!}
                              </div>
                              <br>
                              </div>
                            
                        
                      </div>

                      <div class="form-group row col-md-12">
                        <div class="form-group col-md-6">
                          <label for="motangan_sp"> Mô Tả Ngắn Của Sản Phẩm </label>
                          <textarea class="summernote" name="motangan_sp" id="" ></textarea>
                          @foreach($errors->get('motangan_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="motadai_sp"> Mô Tả Chi Tiết Của Sản Phẩm </label>
                          <textarea class="summernote" name="motadai_sp" id=""></textarea>
                          @foreach($errors->get('motadai_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>

                        <div class="form-group col-md-4"> 
                          <div><label for="Anhien">Trạng Thái</label></div>
                          <div class="form-check form-check-inline">
                              <input type="radio" name="Anhien" id="hd" class="with-gap" value="1" checked="" >
                              <label class="form-check-label" for="hd">Hiện</label>
                          </div>                                
                          <div class="form-check form-check-inline">
                              <input type="radio" name="Anhien" id="dis" class="with-gap" value="0" >
                              <label class="form-check-label" for="dis">Ẩn</label>
                        </div>
                      </div>
  
                      <div class="form-group col-md-4"> 
                        <div><label for="sp_khuyenmai">Khuyến Mãi</label></div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sp_khuyenmai" id="ckm" class="with-gap" value="1" checked="" >
                            <label class="form-check-label" for="ckm">Có</label>
                        </div>                                
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sp_khuyenmai" id="kkm" class="with-gap" value="0" >
                            <label class="form-check-label" for="kkm">Không</label>
                      </div>

                     

                    </div>
                    <div class="form-group col-md-4"> 
                      <div><label for="time-km">Thời gian khuyến mãi</label></div>
                      <div class="form-check form-check-inline">
                          <input  name="time_discount"  type="datetime-local" class="form-control">    
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

