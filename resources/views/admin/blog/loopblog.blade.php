
           
@extends('admin.layoutadmin')

@section('pagetitle', 'DANH SÁCH BLOG ')
@section('main')
@include('sweetalert::alert')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-primary text-white-all">
                    <li class="breadcrumb-item"><a href={{asset('dashboard')}}><i class="fas fa-tachometer-alt"></i>Tổng Quan </a></li>
                  <li class="breadcrumb-item"><a href="{{route('blog.index')}}"><i class="far fa-file"></i> Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>Danh Sách Blog</li>
                  </ol>
                </nav>
                <div class="card">
                  
                  <div class="card-header">
                    <h4>DANH SÁCH BLOG</h4>
                    <a href="{{route('blog.create')}}"> <button class="btn btn-primary">
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
                            <th>Tên Blog <br> Loại Blog </th>
                            <th  >Người Đăng  </th>
                            <th> Ngày Đăng</th>
                            <th>Hình Ảnh</th>
                            <th>Nổi Bật</th>
                            <th>Trạng Thái</th>
                            <th class="text-center" >Quản Lí</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ds as $row)
                          <tr>
                            <td>
                              <div> {{ $row->id_blog}} </div> 
                             

                            </td>
                            <td width="25%">
                            <div>{{$row->name_blog}}</div>
                            <div>
                              @php
                              $id_loaiblog =$row->id_loaiblog;
                              $tl = App\LoaiBlog::find($id_loaiblog);
                              echo $tl->name_loaiblog;
                            @endphp</div>
                          
                      
                           
                           </td>
                            <td class="align-middle">
                            
                              <div>
                                @php
                                $id =$row->id;
                                $tl = \App\Models\User::find($id);
                                echo $tl->name;
                              @endphp

                              </div>
                            </td>
                            <td>
                               
                                {{date('d-m-Y ', strtotime($row->time_blog))
                              }}
                              </td>
                          
                              <td>
                              
                               
                                 
                                    <div class="chocolat-parent">
                                      <a href="{{asset('imgblog')}}/{{$row->img_blog}}" class="chocolat-image"  title="{{$row->name_blog}}">
                                        <div data-crop-image="75">
                                        <img alt="image" src="{{asset('imgblog')}}/{{$row->img_blog}}"  class="avatar avatar-xl">
                                        </div>
                                      </a>
                                    </div>
                            </td>

                            <td width="10%" data-noibat="{{ $row->id_blog }}"  >
                              <div class="pretty p-switch p-fill">
                                <input type="checkbox" class="change-noibat" {{ $row->noibat==1?'checked':'' }}>
                                <div class="state p-success">
                                  <label class="content-status">{{ $row->noibat==1?'Có':'Không'}}</label>
                                </div>
                              </div>
                          </td>

                            <td data-id="{{ $row->id_blog }}"  >
                              <div class="pretty p-switch p-fill">
                                <input type="checkbox" class="change-status" {{ $row->Anhien==1?'checked':'' }}>
                                <div class="state p-success">
                                  <label class="content-status">{{ $row->Anhien==1?'Hiện':'Ẩn'}}</label>
                                </div>
                              </div>
                          </td>
                            
                        <td  class="text-center">
                          <form class="form-check-inline" action="{{route('blog.edit', $row->id_blog)}}" >
                         <button style="border: 0" class="btn btn-icon btn-primary" >  <i class="fa fa-eye" aria-hidden="true"></i> Sửa</button>
                        </form>
                        <form class="form-check-inline" action="{{route('blog.destroy', $row->id_blog)}}" method="POST">
                                @csrf
                                {!! method_field('delete') !!}
                             <button class="btn btn-icon btn-danger" style="border: 0" onclick="xoaha(event)" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
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