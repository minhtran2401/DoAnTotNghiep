@extends('admin.layoutadmin')
@section('pagetitle', 'DANH SÁCH ĐƠN HÀNG ')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Đơn Hàng</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH ĐƠN HÀNG</h4>
                
{{--                
              <a href="{{route('loai-san-pham.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i> Thêm Loại
              </button>
            </a> --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Tên người nhận </th>
                        <th>Email </th>
                        <th>Số điện thoại</th>
                        <th >Ghi chú đơn hàng</th>
                        <th>Tổng tiền</th>
                        {{-- <th>ID</th> --}}
                        <th>Tình trạng</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id_donhang}}
                        </td>
                        <td>
                        <div>{{$row->name_nguoinhan}}</div>
                        </td>
                        <td>
                        <div>{{$row->email_nguoinhan}}</div>
                        </td>
                        <td>
                        <div>{{$row->sdt_nguoinhan}}</div>
                        </td>
                        <td>
                        <div>{{ Str::limit($row->ghichu_donhang,10)}}</div>
                        </td>
                        <td>
                        <div>{{number_format($row->tongtien_donhang)}} đ</div>
                        </td>
                        <td>
                          <div>
                            @php
                            $id_tinhtrang =$row->id_tinhtrang;
                            $tt = App\TinhTrangHD::find($id_tinhtrang);
                            @endphp
                            @if($tt->id_tinhtrang==1)
                            <span class="btn btn-secondary">{{$tt->name_tinhtrang}}</span>
                            @elseif($tt->id_tinhtrang==2)
                            <span class="btn btn-info">{{$tt->name_tinhtrang}}</span>
                            @elseif($tt->id_tinhtrang==3)
                            <span class="btn btn-primary">{{$tt->name_tinhtrang}}</span>
                            @elseif($tt->id_tinhtrang==4)
                            <span class="btn btn-warning">{{$tt->name_tinhtrang}}</span>
                            @elseif($tt->id_tinhtrang==5)
                            <span class="btn btn-danger">{{$tt->name_tinhtrang}}</span>
                            @elseif($tt->id_tinhtrang==6)
                            <span class="btn btn-light">{{$tt->name_tinhtrang}}</span>
                            @elseif($tt->id_tinhtrang==7)
                            <span class="btn btn-dark">{{$tt->name_tinhtrang}}</span>
                            @endif

                          </div>
                      
                        </td>
                        

                        <td>
                          <form class="form-check-inline"  method="GET">
                            {{ method_field('UPDATE')}}
                            @csrf
                            <button style="border: 0"style="border: 0"  > <a href="{{route('don-hang.edit', $row->id_donhang)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Xem</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('don-hang.destroy', $row->id_donhang)}}" method="POST">
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
