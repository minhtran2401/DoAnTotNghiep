@extends('admin.layoutadmin')
@section('pagetitle', 'KHO HÀNG ')
@section('main')
@include('sweetalert::alert')

<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
              <li class="breadcrumb-item"><a href="{{asset('/')}}"><i class="fas fa-tachometer-alt"></i> Tổng Quan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách LÔ HÀNG</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH LÔ HÀNG</h4>
                
               
              <a href="{{route('nhap-kho-hang.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i> Thêm
              </button>
            </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          # Mã SKU
                        </th>
                        <th>Tên Hàng </th>
                        <th>Ngày Nhập </th>
                        <th>Hạn Sử Dụng </th>
                        <th>Số lượng còn lại </th>
                        <th>Trạng thái </th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                            <td class="text-center" >
                               # {{ $row->sku}}
                            </td>
                            <td style="width: 15%">
                            <div>{{$row->khohang_name}}</div>
                            </td>
                            <td>
                            <div>{{$row->khohang_ngaynhap}}</div>
                            </td>
                            <td>
                              <div>
                                @php
                                 $expirydate = \Carbon\Carbon::parse($row->khohang_hsd);
                                  $today = \Carbon\Carbon::now();
                                  $difference = $today->diffInDays($expirydate, false);
                                @endphp
                                @if($difference < 0)
                                  <div style="color: red">  Đã hết hạn sử dụng </div>
                                @else
                                Còn lại {{$difference}} ngày 
                                @endif
                              </div>
                            </td>
                            <td>
                              <div>
                                {{$row->khohang_soluong}} sản phẩm
                              </div>
                            </td>
                       
                            <td data-id="{{ $row->sku }}"  >
                              <div class="pretty p-switch p-fill">
                                <input type="checkbox" class="change-status" {{ $row->khohang_trangthai==1?'checked':'' }}>
                                <div class="state p-success">
                                  <label class="content-status">{{ $row->khohang_trangthai==1?'Đã nhập giá':'Chưa nhập giá'}}</label>
                                </div>
                              </div>
                          </td>
                            <td >
                              <form class="form-check-inline"  method="GET">
                                  @csrf
                                  {{ method_field('GET')}}
                                  
                                  <button style="border: 0"style="border: 0" > <a href="{{route('nhap-kho-hang.edit', $row->sku)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                              </form>
                              <form class="form-check-inline" action="{{route('nhap-kho-hang.destroy', $row->sku)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                  <button  class="btn btn-icon btn-danger xoaha" style="border: 0" onclick="xoaha(event)" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
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
