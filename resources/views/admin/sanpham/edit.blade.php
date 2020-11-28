@extends('admin.layoutadmin')
@section('pagetitle', "SỬA SẢN PHẨM")
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
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA SẢN PHẨM</li>
                    </ol>
                  </nav>
                  {{-- <h2> SẢN PHẨM</h2> --}}
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>SỬA SẢN PHẨM</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
              <form method="POST" action="{{route('san-pham.update',$row->id_sanpham)}}" enctype="multipart/form-data"  name="frmEditPro">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                @csrf
              @method('patch')
                    <div class="form-group row" >
                      <div class="form-group row col-md-6">
                        <div class="form-group col-md-6">
                            <label for="name_sp">Tên Sản Phẩm</label>
                            <select id="single" name="sku"  class="form-control">
                              @foreach ($kho as $kho)
                              @if($row->name_sp == $kho->khohang_name )
                              <option value='{{$kho->sku}}' selected>{{$kho->khohang_name}}</option>  
                              @else
                              <option value='{{$kho->sku}}' >{{$kho->khohang_name}}</option>  
                              @endif
                              @endforeach 
                              </select>
                              <input hidden type="text"  name="name_sp"  id="name_sp">
                          @foreach($errors->get('name_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="id_thuonghieu">Nhà Cung Cấp</label>
                             <select  name="id_thuonghieu" class="form-control">
                                
                                   @foreach ($ncc as $ncc)
                                   @if($row->id_thuonghieu == $ncc->id_thuonghieu )
                                   <option value='{{$ncc->id_thuonghieu}}' selected>{{$ncc->name_thuonghieu}}</option>  
                                   @else
                                   <option value='{{$ncc->id_thuonghieu}}'>{{$ncc->name_thuonghieu}}</option>  
                                   @endif
                                   @endforeach 
                           </select>
                         </div>
                        <div class="form-group col-md-6">
                            <label for="name_nhomsp">Nhóm Sản Phẩm</label>
                            <select  name="id_nhomsp" class="form-control">
                              <option value="0">---NHÓM SẢN PHẨM---</option>

                                  @foreach ($nhomsp as $nhomsp)
                                  @if($row->id_nhomsp == $nhomsp->id_nhomsp )
                                  <option value='{{$nhomsp->id_nhomsp}}' selected>{{$nhomsp->name_nhomsp}}</option>  
                                  @else
                                  <option value='{{$nhomsp->id_nhomsp}}'>{{$nhomsp->name_nhomsp}}</option>  
                                  @endif
                                  @endforeach 
                          </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="name_loaisp">Loại Sản Phẩm</label>
                            <select  name="id_loaisp" class="form-control">
                              <option value="0">---LOẠI SẢN PHẨM---</option>
                              @foreach ($loaisp as $loaisp)
                              @if($row->id_loaisp == $loaisp->id_loaisp )
                              <option value='{{$loaisp->id_loaisp}}' selected>{{$loaisp->name_loaisp}}</option>  
                              @else
                              <option value='{{$loaisp->id_loaisp}}'>{{$loaisp->name_loaisp}}</option>  
                              @endif
                              @endforeach 

                          </select>
                        </div>

                        
                        <div class="form-group col-md-6">
                          <label for="old_price_sp">Giá Cũ (đ)</label>
                        <input type="text" class="form-control" placeholder="K sale thì để trống" value="{{$row->old_price_sp}}" name="old_price_sp">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="price_sp">Giá Mới (đ)</label>
                          <input type="text" class="form-control" placeholder="Giá hiện tại" value="{{$row->price_sp}}" name="price_sp" >
                            @foreach($errors->get('price_sp') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                       <label for="id_donvitinh">Đơn vị tính</label>
                          <select  name="id_donvitinh" class="form-control">
                                @foreach ($dvt as $dvts)
                                @if($row->id_donvitinh == $dvts->id_donvitinh )
                                <option value='{{$row->id_donvitinh}}'selected>{{$dvts->name_donvi}}</option>  
                                @else
                                <option value='{{$dvts->id_donvitinh}}' >{{$dvts->name_donvi}}</option>  
                                @endif
                                @endforeach 
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <div><label for="time-km">Thời gian khuyến mãi</label></div>
                        <div class="form-check form-check-inline">
                        <input  name="time_discount"  type="text" class="form-control datepicker" value="{{ old('time_discount',$row->time_discount)}}">
                      </div>

                      </div>
                      </div>
                      <div class="form-group col-md-6">
                          <div class="form-group col-md-12">
                              <label for="img_sp">Hình Sản Phẩm</label>
                              
                            
                              <div class="col-md-12 row" >
                              <input type="file" class="form-control col-md-8" name="img_sp">
                              <img alt="image" src="{{asset('hinhsp')}}/{{$row->img_sp}}"  class="avatar avatar-xl ml-3">
                            </div>
                             
                          </div>
                          <div class="form-group col-md-12 ">
                            <label for="detail_images">Hình chi tiết sản phẩm</label>
                          
                           <div class="form-group row col-md-12 " >
                            @foreach ($images as $key => $img)
                           <div class="chocolat-parent mr-3" data-id-img="{{ $img->id_img }}">
                                  <a href="{!! asset('/hinhchitiet/'.$img->name_img) !!}" class="chocolat-image"  idHinh="{!! $img->id_img !!}" id="{!! $key !!}"></a>
                                <div data-crop-image="100">
                                  <img alt="image" src="{!! asset('/hinhchitiet/'.$img->name_img) !!}" idHinh="{!! $img->id_img !!}" id="{!! $key !!}" class="avatar avatar-xl">
                                  </div>
                                <a href="javascript:void(0)" class="del_img btn btn-danger btn-circle icon_del mb-3"><i class="glyphicon glyphicon-remove">Xóa</i></a>
                                </div>
                        @endforeach
                       
                               </div>
                               <button type="button" class="btn btn-primary mb-3" id="addImage">Thêm hình</button>
                               <div id="insert"></div>
                        </div>
                       
                      </div>

                      <div class="form-group row col-md-12">
                        <div class="form-group col-md-6">
                          <label for="motangan_sp"> Mô Tả Ngắn Của Sản Phẩm </label>
                          <textarea class="summernote" name="motangan_sp"  >{{$row->motangan_sp}}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="motadai_sp"> Mô Tả Chi Tiết Của Sản Phẩm </label>
                          <textarea class="summernote" name="motadai_sp" >{{$row->motadai_sp}}</textarea>
                        </div>

                        <div class="form-group col-md-4">
                          <div class="col-md-12"><label for="">Ẩn hoặc Hiện </label></div>
                          <div class="form-check form-check-inline">
                              <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1"
                                     @if ($row->Anhien == 1) checked @endif >
                              <label class="form-check-label" for="Hien">Hiện</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input type="radio" name="Anhien" id="An" class="with-gap" value="0"
                                     @if ($row->Anhien == 0) checked @endif >
                              <label class="form-check-label" for="An">Ẩn</label>
                          </div>
                      </div>
  
                      <div class="form-group col-md-4 " hidden>
                        <div class="col-md-12"><label for="">Giảm Giá </label></div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sp_khuyenmai" id="co" class="with-gap" value="1"
                                   @if ($row->old_price_sp != null) checked @endif >
                            <label class="form-check-label" for="co">Có</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sp_khuyenmai" id="khong" class="with-gap" value="0"
                                   @if ($row->old_price_sp == null) checked @endif >
                            <label class="form-check-label" for="khong">Không</label>
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


