@extends('admin.layoutadmin')
@section('pagetitle', "THÊM ADMIN")
@section('main')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <!------------------->
            @if(session()->get('success'))
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Thông báo!</h4>
              {{ session()->get('success') }}
            </div>
            @endif
            @if(session()->get('successx'))
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Thông báo!</h4>
              {{ session()->get('successx') }}
            </div>
            @endif
            @if(session()->get('status'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Thông báo!</h4>
              {{ session()->get('status') }}
            </div>
            @endif
            <!------------------->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
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
                        <th>ID User</th>
                        <th>Model</th>
                        <th>ID</th>
                        <th>Cấp</th>
                        <th>Trạng Thái</th>
                        {{-- <th>Created_at</th> --}}
                        <th>Updated_at</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tb as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id}}
                        </td>
                        <td>
                            <div>{{$row->log_name}}</div>
                        </td>
                        <td>
                            <div>{{$row->description}}</div>
                        </td>
                        <td>
                            {{-- <div>
                            @php
                            $id =$row->subject_id;
                            $idm = App\Users::find($id);
                            echo $idm->name;
                            @endphp
                            </div> --}}
                            {{$row->subject_id}}</div>
                        </td>
                        <td>
                            <div>{{$row->subject_type}}</div>
                        </td>
                        <td>
                            <div>{{$row->causer_id}}</div>
                        </td>
                        <td>
                            <div>{{$row->causer_type}}</div>
                        </td>
                        <td>
                            <div>{{$row->properties}}</div>
                        </td>
                         {{-- <td>
                            <div>{{$row->created_at }}</div>
                        </td> --}}
                        <td>
                            <div>{{$row->updated_at }}</div>
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
