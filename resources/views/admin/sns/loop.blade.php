@extends('admin.layoutadmin')
@section('pagetitle', 'MẠNG XÃ HỘI ')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách MẠNG XÃ HỘI</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH MẠNG XÃ HỘI</h4>
                
               
              <a href="{{route('sns.create')}}"> <button class="btn btn-primary">
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
                          #
                        </th>
                        <th>ICON </th>
                        <th>LINK </th>
                        <th>THAO TÁC</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sns as $row)
                      <tr>
                            <td class="text-center" >
                                {{ $row->id}}
                            </td>
                            <td>
                              <div><img src="{{asset('snsicon')}}/{{$row->snsicon}}" class="avatar" alt=""></div>
                            </td>
                            <td>
                              <div>
                                <a href="{{$row->snslink}}" target="_blank" rel="noopener noreferrer">Truy Cập</a>
                              </div>
                            </td>
                       

                            <td >
                              <form class="form-check-inline"  method="GET">
                                  {{ method_field('UPDATE')}}
                                  @csrf
                                  <button style="border: 0"style="border: 0" > <a href="{{route('sns.edit', $row->id)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                              </form>
                              <form class="form-check-inline" action="{{route('sns.destroy', $row->id)}}" method="POST">
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
