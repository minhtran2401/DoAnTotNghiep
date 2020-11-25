@extends('admin.layoutadmin')
@section('pagetitle', 'SẢN PHẨM QUẢNG CÁO ')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách SẢN PHẨM QUẢNG CÁO</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH SẢN PHẨM QUẢNG CÁO</h4>
                
               
              <a href="{{route('quang-cao.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i> Thêm Quảng Cáo
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
                        <th>Loại</th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>TRẠNG THÁI</th>
                        <th>THAO TÁC</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($qc as $row)
                      <tr>

                        <td  >
                            {{ $row->id_quangcao}}
                        </td>
                     
                        <td >
                          @if($row->loai_quangcao==1)
                           <div class="text-warning "> Banner trang chủ</div>
                          @elseif($row->loai_quangcao==2)
                            <div class="text-success"> Banner giảm giá sản phẩm</div>
                          @elseif($row->loai_quangcao==3)
                          <div class="text-info">Banner quảng cáo blog</div>
                          @endif
                        </td>

                        <td  >
                          {{$row->name_quangcao}}
                        </td>

                        <td  >
                          {{ \Illuminate\Support\Str::limit($row->mota_quangcao, 20, $end='...') }}

                          {{-- {{$row->mota_quangcao}} --}}
                        </td>
                       

                          <td data-id="{{ $row->id_quangcao }}"  >
                              <div class="pretty p-switch p-fill">
                            {{-- tạo class change-status để lấy sự kiện click --}}
                                <input type="checkbox" class="change-status" {{ $row->Anhien==1?'checked':'' }}>
                                <div class="state p-success">
                                  <label class="content-status">{{ $row->Anhien==1?'Hiện':'Ẩn'}}</label>
                                </div>
                              </div>
                          </td>
                        <td >


                          <form class="form-check-inline"  method="GET">
                            @csrf
                            {{ method_field('GET')}}
                            <button style="border: 0"style="border: 0"  > <a href="{{route('quang-cao.edit', $row->id_quangcao)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('quang-cao.destroy', $row->id_quangcao)}}" method="POST">
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
