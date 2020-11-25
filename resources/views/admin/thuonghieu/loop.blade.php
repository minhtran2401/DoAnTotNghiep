@extends('admin.layoutadmin')
@section('pagetitle', 'THƯƠNG HIỆU ')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách THƯƠNG HIỆU</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH THƯƠNG HIỆU</h4>
                
               
              <a href="{{route('thuong-hieu.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i> Thêm
              </button>
            </a>
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
                        <th>Điện Thoại </th>
                        <th>Ảnh </th>
                        <th>Trạng Thái</th>
                        <th>Liên Kết </th>
                        <th>Quản Lí</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                            <td class="text-center" >
                                {{ $row->id_thuonghieu}}
                            </td>
                            <td>
                              <div>{{$row->name_thuonghieu}}</div>
                            </td>
                            <td>
                              <div>
                                {{$row->sdt_thuonghieu}}
                              </div>
                            </td>
                       
                            <td>
                              <div><img src="{{asset('hinhthuonghieu')}}/{{$row->img_thuonghieu}}" class="avatar" alt=""></div>
                            </td>

                            <td data-id="{{ $row->id_thuonghieu }}"  >
                                <div class="pretty p-switch p-fill">
                              {{-- tạo class change-status để lấy sự kiện click --}}
                                  <input type="checkbox" class="change-status" {{ $row->Anhien==1?'checked':'' }}>
                                  <div class="state p-success">
                                    <label class="content-status">{{ $row->Anhien==1?'Hiện':'Ẩn'}}</label>
                                  </div>
                                </div>
                            </td>

                            <td>
                              <div>
                                <a href="{{$row->link_thuonghieu}}" target="_blank" rel="noopener noreferrer">Truy Cập</a>
                              </div>
                            </td>

                            <td >
                              <form class="form-check-inline"  method="GET">
                                  {{ method_field('UPDATE')}}
                                  @csrf
                                  <button style="border: 0"style="border: 0" > <a href="{{route('thuong-hieu.edit', $row->id_thuonghieu)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                              </form>
                              <form class="form-check-inline" action="{{route('thuong-hieu.destroy', $row->id_thuonghieu)}}" method="POST">
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
