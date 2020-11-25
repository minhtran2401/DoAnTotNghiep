@extends('admin.layoutadmin')
@section('pagetitle', 'THÔNG TIN SITE ')
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÔNG TIN SITE</li>
                
                
              </ol>
            </nav>
          
        
            @forelse ($ds as $row)
            <div class="card">
                  <div class="card-header">
                        <h4>THÔNG TIN SITE</h4>
                          <a href="{{route('info.edit', $row->id)}}"  title="Sửa">
                            <button class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> Chỉnh Sửa</button>
                          </a>
                  </div>
                <div class="card-body">
                     <div class="container">
                       <div class="row">
                         <div class="col-md-5">
                          <tr>
                            <th>Logo : </th>
                            <td>
                              <img src="{{asset('siteinfo')}}/{{$row->sitelogo}}" style="width: 100px; height: auto; border-radius: 10px;" alt="">
                            </td>
                          </tr>
                          <hr>
                        
                          <tr>
                            <th>Tên site : </th>
                            <td>{{$row->sitename}}</td>
                          </tr> 
                          <hr>
                                         
                          <tr>
                            <th>Giới thiệu : </th>
                            <td>{{$row->introduction}}</td>
                          </tr>
                          <hr>
                         
                          <tr>

                            <th>Email: </th>
                            <td>  <i class="fas fa-mail-bulk    "></i> : {{$row->contactemail}}</td>
                          </tr>
                          <hr>
                          <tr>
                            <th>Số điện thoại :</th>
                           
                            <td>
                              <div class="mb-1"> + <i class="fa fa-phone" aria-hidden="true"></i> : {{$row->contactphone}}</div>
                              @if($row->contactphone2 != null)
                              <div class="mb-1"> + <i class="fa fa-phone" aria-hidden="true"></i> : {{$row->contactphone2}}</div>
                              @else
                              <div class="mb-1"> + <i class="fa fa-phone" aria-hidden="true"></i>: Chưa có số phụ thứ 2 </div>
                              @endif
                              @if($row->contactphone3 != null)
                              <div> + <i class="fa fa-phone" aria-hidden="true"></i> : {{$row->contactphone3}}</div>
                              @else
                              <div class="mb-1"> + <i class="fa fa-phone" aria-hidden="true"></i>: Chưa có số phụ thứ 3 </div>
                              @endif
                              <hr>
                            </td>
                           
                          </tr>
                          <tr>
                           
                            <th>Địa chỉ :</th>
                            <td>
                              <div class="mb-1"> + <i class="fa fa-address-card" aria-hidden="true"></i> : {{$row->address}}</div>
                              @if($row->address2 != null)
                              <div class="mb-1"> + <i class="fa fa-address-book" aria-hidden="true"></i> : {{$row->address2}}</div>
                              @else
                              <div class="mb-1"> + <i class="fa fa-address-book" aria-hidden="true"></i> : Chưa có địa chỉ thứ 2</div>
                              @endif
                              @if($row->address3 != null)
                              <div> + <i class="fa fa-address-book" aria-hidden="true"></i> : {{$row->address3}}</div>
                              @else
                              <div class="mb-1"> + <i class="fa fa-address-book" aria-hidden="true"></i>: Chưa có địa chỉ thứ 3</div>
                              @endif
                              <hr>
                            </td>
                          </tr>
                         </div>
                         <div class="col-md-7">
                          <tr>              
                            <td>
                              <iframe src="{{$row->googlemap}}" width="100%" height="97%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </td>
                          </tr>
                         </div>
                       </div>
                     </div>
                  </div>
                </div>
                @empty
                <a href="{{route('info.create')}}"  title="Sửa">
                  <button class="btn btn-primary"> <i class="fa fa-pen" aria-hidden="true"></i> Nhập thông tin website</button>
                </a>    
              @endforelse
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
