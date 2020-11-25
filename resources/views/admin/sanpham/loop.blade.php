@extends('admin.layoutadmin')
@section('pagetitle', ' SẢN PHẨM ')
@section('main')
@include('sweetalert::alert')

<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
              <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="fas fa-tachometer-alt"></i> Tổng Quan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Sản Phẩm</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH SẢN PHẨM</h4>
              <a href="{{route('san-pham.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i> Thêm Sản Phẩm
              </button>
            </a>
            <hr>
            <div style="color: red" class="text-center card p-3" >Sản phẩm chữ đỏ : giảm giá nhưng chưa đặt thời gian khuyến mãi*</div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Tên </th>
                        <th>Loại</th>
                        <th>Ảnh </th>
                        <th>Giá Cũ</th>
                        <th>Giá mới</th>
                        <th>Giảm Giá</th>
                        <th>Trạng Thái</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id_sanpham}}
                        </td>
                        <td width="15%">
                          @if($row->sp_khuyenmai && $row->time_discount < $now)
                        <div style="color:red"; >{{$row->name_sp}}*</div>
                          @else
                          <div>{{$row->name_sp}}</div>
                          @endif
                        </td>
                        <td>
                          <div>
                            @php
                            $id_loaisp =$row->id_loaisp;
                            $lsp = App\LoaiSanPham::find($id_loaisp);
                            echo $lsp->name_loaisp;
                            @endphp
                          </div>
                        </td>
                        
                        <td>
                          <div><img src="{{asset('hinhsp')}}/{{$row->img_sp}}" class="avatar" alt=""></div>
                        </td>

                        <td>
                          <div>
                         
                            @if($row->old_price_sp != null)

                              
                            <s>{{number_format($row->old_price_sp)}} đ</s> 
                            
                              @else 
                          <div  id="sale{{$row->id_sanpham}}"  >Không giảm giá</div>
                              @endif
                          </div>
                        </td>
                        <td>
                          <div>{{number_format($row->price_sp)}}đ</div>
                        </td>
                       
                          <td data-sale="{{ $row->id_sanpham }}" > 
                            <div class="pretty p-switch p-fill">
                              <input type="checkbox" class="change-sale" {{ $row->sp_khuyenmai==1?'checked':'' }}>
                              <div class="state p-success">
                                <label class="content-sales">{{ $row->sp_khuyenmai==1?'Có':'Không'}}</label>
                              </div>
                            </div>
                       
                        </td>
                        <td data-id="{{ $row->id_sanpham }}"  >
                          <div class="pretty p-switch p-fill">
                            <input type="checkbox" class="change-status" {{ $row->Anhien==1?'checked':'' }}>
                            <div class="state p-success">
                              <label class="content-status">{{ $row->Anhien==1?'Hiện':'Ẩn'}}</label>
                            </div>
                          </div>
                      </td>


                        <td >
                          <form class="form-check-inline"  method="GET">
                            @csrf
                            @method('GET')

                          <button style="border: 0"style="border: 0"  > <a href="{{route('san-pham.edit', $row->id_sanpham)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('san-pham.destroy', $row->id_sanpham)}}" method="POST">
                              @csrf
                             @method('delete')
                             <button  class="btn btn-icon btn-danger" style="border: 0" onclick="xoaha(event)" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
                        </form>

                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
@endsection