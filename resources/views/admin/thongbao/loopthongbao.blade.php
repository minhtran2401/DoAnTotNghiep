@extends('admin.layoutadmin')
@section('pagetitle', "THÊM ADMIN")
@section('main')
<div class="main-content">
    <section class="section">
      <div class="section-body">


        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
              <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fas fa-tachometer-alt"></i> Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Hoạt động</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH THÔNG BÁO</h4>

              <a href="{{route('users.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i>
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
                        <th>Tên</th>
                        <th>Trạng Thái</th>
                        <th>Chi tiết</th>
                        <th>Thời gian</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tb as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id}}
                        </td>
                        <td>

                            @php
                            $id_user = $row->causer_id;
                            $name = App\Users::find($id_user);
                            echo $name->name;
                          @endphp

                        </td>
                        <td>
                            <div>{{$row->description}}</div>
                        </td>


                        <td>
                          @php

                            $string = $row->properties;
                           $area = json_decode($string, true);
                          //  dd($area);

                            foreach($area['attributes'] as $i => $v)
                            {
                                echo $v . '</br>';
                            }
                            @endphp
                        </td>

                        <td>
                          {{date('d-m-Y H:i:s', strtotime($row->updated_at))}}
                        </td>


                          {{-- <form class="form-check-inline"  method="GET">

                          <button style="border: 0"style="border: 0"  > <a href="{{route('users.edit', $row->id)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('users.destroy', $row->id)}}" method="POST">
                                @csrf
                                {!! method_field('delete') !!}
                             <button id="swal-6" class="btn btn-icon btn-danger" style="border: 0" onclick="return confirm('Xóa hả ?');" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
                        </form> --}}

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
