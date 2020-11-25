@extends('admin.layoutadmin')
@section('pagetitle', "THÊM LOẠI TEMPLATE MỚI")
@section('main')
@include('sweetalert::alert')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
              <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="fas fa-tachometer-alt"></i>Tổng Quan </a></li>
              <li class="breadcrumb-item"><a href="{{asset('counpon')}}"><i class="far fa-file"></i> Mã Giảm Giá</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Mã Giảm Giá</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH MÃ GIẢM GIÁ</h4>
               
              <a href="{{route('counpon.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i> Thêm Mã
              </button>
            </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped text-center" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th width="15%">Tên </th>
                        <th>Ngày Hết Hạn</th>
                        <th>Kiểu</th>
                        <th>Số Tiền Giảm</th>
                        <th width="10%">Số Lượng Còn Lại</th>
                        <th>Mã</th>
                        <th>Trạng Thái</th>
                        <th>Quản Lí</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->counpon_id}}
                        </td>

                        <td width="15%"  >
                          <div class="text-flow" >{{$row->counpon_name}}</div>
                        </td>

                        <td>
                          <div>{{date('d-m-Y', strtotime($row->counpon_time))}}</div>
                        </td>

                        <td>
                          <div> {{ $row->counpon_type==1? "Giảm Theo Tiền " : "Giảm Theo %"}}</div> 
                        </td>

                        <td class="text-center">
                          @if($row->counpon_type==1)
                          <div>{{$row->counpon_number}} đ</div>
                          @else
                          <div>{{$row->counpon_number}} %</div>
                          @endif
                        </td>

                        <td width="10%">
                          <div>{{$row->counpon_quanty}} mã</div>
                        </td>

                        <td>
                          <div>{{$row->counpon_code}}</div>
                        </td>


                        <td data-id="{{ $row->counpon_id }}"  >
                          <div class="pretty p-switch p-fill">
                        {{-- tạo class change-status để lấy sự kiện click --}}
                            <input type="checkbox" class="change-status" {{ $row->Anhien==1?'checked':'' }}>
                            <div class="state p-success">
                              <label class="content-status">{{ $row->Anhien==1?'Dùng':'Bỏ'}}</label>
                            </div>
                          </div>
                      </td>



                        <td >


                          <form class="form-check-inline"  method="GET">

                         <button style="border: 0"style="border: 0"  > <a href="{{route('counpon.edit', $row->counpon_id)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('counpon.destroy', $row->counpon_id)}}" method="POST">
                                @csrf
                                {!! method_field('delete') !!}
                             <button class="btn btn-icon btn-danger" style="border: 0" onclick="xoaha(event);" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
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
