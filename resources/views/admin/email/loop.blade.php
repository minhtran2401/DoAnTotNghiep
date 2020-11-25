@extends('admin.layoutadmin')
@section('pagetitle', 'EMAIL KHÁCH HÀNG')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Email Khách Hàng Đăng Kí Nhận Thông Báo</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH EMAIL KHÁCH HÀNG</h4>
                
               
              <a href="{{route('nhom-san-pham.create')}}">
            </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="tableExport">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Email </th>
                        <th>Ngày Đăng Kí</th>
                        <th>Quản Lí</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id_email}}
                        </td>
                        <td>
                        <div>{{$row->email}}</div>
                        </td>    
                        
                        <td>
                        <div>{{date("d-m-Y", strtotime($row->created_at))}}</div>
                        </td>
                        
                        <td>
                          <form class="form-check-inline" action="{{route('xoa_email', $row->id_email)}}" method="POST">
                            @csrf
                            {!! method_field('GET') !!}
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