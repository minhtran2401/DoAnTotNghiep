@extends('admin.layoutadmin')
@section('pagetitle', 'ĐƠN VỊ TÍNH ')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Đơn Vị</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH ĐƠN VỊ</h4>
                
               
              <a href="{{route('donvitinh.create')}}"> <button class="btn btn-primary">
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
                        <th>Đơn Vị </th>
                        <th class="text-center">Sửa </th>
                        <th class="text-center">Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id_donvitinh}}
                        </td>
                        <td>
                          <div>{{$row->name_donvi}}</div>
                        </td>
                       <td class="text-center">
                        <form class="form-check-inline"  method="GET">
                          {{ method_field('UPDATE') }}
                          @csrf

                        <button style="border: 0"style="border: 0"  > <a href="{{route('donvitinh.edit', $row->id_donvitinh)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                      </form>
                       </td>

                        <td class="text-center">
                          
                        <form class="form-check-inline" action="{{route('donvitinh.destroy', $row->id_donvitinh)}}" method="POST">
                              @csrf
                             @method('delete')
                             <button  class="btn btn-icon btn-danger" style="border: 0" onclick="xoaha(event)" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
                        </form>

                      </td>
                      <td></td>
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
