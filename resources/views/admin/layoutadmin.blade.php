<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('pagetitle')</title>
  <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<!--iconFE-->



<!--zoomimage-->

<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/chocolat/dist/css/chocolat.css">


  <!--alert-->
  <link rel="stylesheet" type="text/css" href="{{asset('cssBE')}}/css/sweetalert.min.css">


  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/pretty-checkbox/pretty-checkbox.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/jquery-selectric/selectric.css">


  <!--datepicker-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/summernote/summernote-bs4.css">

  <!--calendar-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/app.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/style.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('cssBE')}}/img/favicon.ico' />

</head>

<body>
  
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
         

            <a href="#" class="nav-link nav-link-lg ">
              @if($nof12->status == 1)
              <div  data-id="{{ $nof12->id }}">
              <div class="pretty p-switch p-fill">
                <input type="checkbox"  id="change-status-web" class="change-status" checked }}>
                <div class="state p-success">
                  <label style="color: rgb(18, 230, 28)" class="content-status"> ĐANG BẬT BẢO VỆ TRANG WEB</label>
                </div>
                @else
              
                  <div  data-id="{{ $nof12->id }}">
                  <div class="pretty p-switch p-fill">
                    <input type="checkbox"  id="change-status-web" class="change-status">
                    <div class="state p-success">
                      <label style="color: rgb(18, 230, 28)" class="content-status">ĐANG TẮT BẢO VỆ TRANG WEB</label>
                    </div>
                @endif
              </div>
            </div>
            </a>
             

            @if($baotri->status == 0)
            <a href="#" class="nav-link nav-link-lg ">
              <form action="{{ route('shutdown') }}" method="post">
                @csrf
                <button onclick="xacnhan(event)" style="submit" class="btn">BẢO TRÌ WEBSITE</button>
            </form>
            </a>
            @else
            <a href="#" class="nav-link nav-link-lg ">
              <form action="{{ route('start') }}" method="post">
                @csrf
                <button onclick="xacnhan2(event)" style="submit" class="btn">KHỞI ĐỘNG WEBSITE</button>
            </form>
            </a>
            @endif

            <a href="#" class="nav-link nav-link-lg ">
              <form action="{{ route('our_backup_database') }}" method="get">
                <button style="submit" class="btn">XUẤT DATABASE</button>
            </form>
            </a>

          
              
           
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
            class="nav-link nav-link-lg message-toggle"><i data-feather="alert-octagon"></i>
            <span class="badge headerBadge1">
              {{count($notipro)}} </span> </a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
            <div class="dropdown-header">
              Sản phẩm
              <div class="float-right">
                <a href="javascript:0">Đi bổ sung ngay</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-message">
              @forelse ($notipro as $noti)
              @if($noti->khohang_soluong < 15)
            <a href="{{route('nhap-kho-hang.edit',$noti->sku)}}" class="dropdown-item">
              @else
              <a href="{{route('san-pham.edit',$noti->id_sanpham)}}" class="dropdown-item">
                @endif
              <span class="dropdown-item-avatar
              text-white"> <img alt="image" src="{{asset('hinhsp')}}/{{$noti->img_sp}}" class="rounded-circle">
              </span> <span class="dropdown-item-desc"> <span class="message-user">{{$noti->name_sp}}</span>
                @if($noti->khohang_soluong < 15)
                  <span class="time messege-text"> <span style="color:rgb(174, 233, 36); font-weight:bold;" > Số lượng sản phẩm gần hết !!</span></span>
                @else
                @php
                                 $expirydate = \Carbon\Carbon::parse($noti->khohang_hsd);
                                  $today = \Carbon\Carbon::now();
                                  $difference = $today->diffInDays($expirydate, false);
                                @endphp
                                @if($difference < 0)
                                <span style="color: red" class="time messege-text">Đã hết hạn sử dung </span>
                                @else
                <span class="time messege-text">Gần hết hạn !!  <span style="color:rgb(174, 233, 36); font-weight:bold;" >Còn {{$difference}} ngày</span></span>
                @endif
                @endif
            <span class="time"> Còn {{ $noti->khohang_soluong }} sản phẩm</span>
                </span>
              </a>
              @empty
              asd
             @endforelse
            </div>
            <div class="dropdown-footer text-center">
            <a href="{{route('nhap-kho-hang.index')}}">Xem tất cả <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li >
          @if(count($newbill) != 0)
          <li id="check-all-readed" class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
            class="nav-link nav-link-lg message-toggle"><i data-feather="bell" class="bell"></i>
            <span class="badge headerBadge1">
             {{count($newbill)}} </span> </a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
            <div class="dropdown-header">
              Thông Báo
              <div id="check-read-all" class="float-right">
                <a href="javascript:0" >Đánh dấu tất cả đã xem</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-message">
              @foreach ($newbill as $n) 
                  
           
            <a  data-id="{{$n->id_donhang}}" href="{{route('don-hang.edit',$n->id_donhang)}}" class="dropdown-item"> 
               <span  class="dropdown-item-icon bg-primary text-white"> <i>{{ substr($n->name_nguoinhan, 0,1) }}</i></span> 
          
            <span name="check-the-billz" class="dropdown-item-desc">
                  <span class="message-user">  {{$n->name_nguoinhan}}</span>
                  <span class="time messege-text">Đã đặt một đơn hàng mới</span>
                  <span class="time"> {{ Carbon\Carbon::parse($n->created_at)->diffForHumans()}}</span>
                </span>
              </a> 
              @endforeach
            </div>
            <div class="dropdown-footer text-center">
              <a href="javascript:0"> Xem tất cả <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li>
        @else
        <li id="render-check-all-bill" class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
          class="nav-link nav-link-lg message-toggle"><i data-feather="bell" class="bell"></i>
          <span class="badge headerBadge1">
           {{count($newbill)}} </span> </a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
          <div class="dropdown-header">
            Hiện tại không có đơn hàng mới !!!
            <div id="check-read-all" class="float-right">
            
            </div>
          </div>
         
         
        </div>
      </li>
        @endif
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('imguser')}}/{{ Auth::user()->avatar }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
            <a href="" data-toggle="modal" data-target="#exampleModal" class="dropdown-item has-icon"> <i class="fa fa-lock" aria-hidden="true"></i>  Đổi mật khẩu
              </a> 
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formModal">Đổi mật khẩu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="POST" action="{{route('postCredentials')}}" novalidate role="form" id="form-change-password" class="">
              <div class="form-group">
                <label>Mật khẩu cũ</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-unlock"></i>
                    </div>
                  </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                  <input type="password" id="current-password" class="form-control" name="current-password" placeholder="Mật khẩu hiện tại" required>
                </div>
              </div>
              <div class="form-group">
                <label>Mật khẩu mới</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </div>
                  </div>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu mới" required>
                </div>
              </div>
              <div class="form-group">
                <label>Nhập lại mật khẩu mới</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </div>
                  </div>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu mới" required>
                </div>
              </div>
              <div class="form-group mb-0">
                
              </div>
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">XÁC NHẬN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
        {{-- menu --}}
        

      <?=View::make('admin.leftmenu')?>


        {{-- menu --}}


      <!-- Main Content -->
      
            @yield('main')
            
          

            
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                  <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Select Layout</h6>
                      <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                          <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                          <span class="selectgroup-button">Dark</span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Sidebar Color</h6>
                      <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                          <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Color Theme</h6>
                      <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                          <li title="white" class="active">
                            <div class="white"></div>
                          </li>
                          <li title="cyan">
                            <div class="cyan"></div>
                          </li>
                          <li title="black">
                            <div class="black"></div>
                          </li>
                          <li title="purple">
                            <div class="purple"></div>
                          </li>
                          <li title="orange">
                            <div class="orange"></div>
                          </li>
                          <li title="green">
                            <div class="green"></div>
                          </li>
                          <li title="red">
                            <div class="red"></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <div class="theme-setting-options">
                        <label class="m-b-0">
                          <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="mini_sidebar_setting">
                          <span class="custom-switch-indicator"></span>
                          <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <div class="theme-setting-options">
                        <label class="m-b-0">
                          <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="sticky_header_setting">
                          <span class="custom-switch-indicator"></span>
                          <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                      </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                      <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            
         

      <footer class="main-footer">
        <div class="footer-left " >
          <a href="#">GreenFresh made with <span class=text-danger ><i class="fas fa-heart"></i></span></a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!--sweetalert-->
<script src="{{asset('cssBE')}}/js/sweetalert2.all.js"></script>
  <script src="{{asset('cssBE')}}/js/app.min.js"></script>
  <!--modal-->
  <script src="{{asset('cssBE')}}/bundles/prism/prism.js"></script>
  <!-- JS Libraies -->
  <script src="{{asset('cssBE')}}/bundles/datatables/datatables.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('cssBE')}}/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('cssBE')}}/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{asset('cssBE')}}/js/custom.js"></script>
  <!--editor-->
  <script src="{{asset('cssBE')}}/bundles/summernote/summernote-bs4.js"></script>
  <script src="{{asset('cssBE')}}/bundles/codemirror/lib/codemirror.js"></script>
  <script src="{{asset('cssBE')}}/bundles/codemirror/mode/javascript/javascript.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
 

  <!--datepicker-->

  <script src="{{asset('cssBE')}}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  


<script src="{{asset('cssBE')}}/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-ui/jquery-ui.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>



 <!-- JavaScript -->

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>




  @yield('jsc')
 

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{asset('cssBE')}}/js/sweetalert.min.js"></script>

<script>
function xoaha(event) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Bạn có chắc ?",
  text: "Không thể khôi phục dữ liệu sau khi xóa",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Xóa Đi",
  cancelButtonText: "Từ Từ",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Đã hủy", " Chưa xóa gì cả :)", "error");
  }
});
}

function xacnhan(event) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Bạn có chắc ?",
  text: "Thao tác này sẽ đưa trang web vào trạng thái bảo trì",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Xác Nhận",
  cancelButtonText: "Từ Từ",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Đã hủy", " Chưa làm gì cả :)", "error");
  }
});
}

function xacnhan2(event) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Bạn có chắc ?",
  text: "Thao tác này sẽ đưa trang web vào trạng thái hoạt động",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#7faf51",
  confirmButtonText: "Xác Nhận",
  cancelButtonText: "Từ Từ",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Đã hủy", " Chưa làm gì cả :)", "error");
  }
});
}
  </script>

<script>
  $(document).ready(function(){
      $("[name='id_nhomsp']").change(function(){ 
           var id_nhomsp= $(this).val();
           var diachi= "{{route('get_type_pro',"")}}/"+id_nhomsp;
                      $("[name='id_loaisp']").load(diachi);

      });
  });
</script>

<script>
  $(document).ready(function () {
	$("#addImage").click(function(){
		$("#insert").append('<div class="form-group"><input type="file" name="fEditImage[]" ></div>');
		});
});
</script>

<script>
  $(document).ready(function() {

	$(".del_img").on('click',function() {
		var url = "{{route('delImage')}}";
		var _token = $("form[name='frmEditPro']").find("input[name='_token']").val();
		var idHinh = $(this).parent().find("img").attr("idHinh");
		var img = $(this).parent().find("img").attr("src");
		var rid = $(this).parent().find("img").attr("id");
    

		$.ajax({
			url: url ,
		
			type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    cache: false,
			data: {
					idHinh:idHinh,
					urlHinh:img
				},
			success: function (data) {
				if (data) {
					$('.chocolat-parent[data-id-img='+data+']').remove()
          alertify.error('Đã xóa hình');
				} else {
					alert("Error!");
				}	
				
			}
		});
	});
});
</script>

<script>
  $(document).ready(function() {

	$("#check-read-all").on('click',function(e) {
    e.preventDefault();
    var status= 2;
		var url = "{{route('check_all_bill')}}";

		$.ajax({
			url: url ,		
			type: 'POST',
      cache: false,
			data: {
        "_token": "{{ csrf_token() }}",
					status:status
				},
			success: function (data) {
				if (data) {
         $("#check-all-readed").empty();
         $("#check-all-readed").html(' <li class="dropdown dropdown-list-toggle"><a href="javascript:0" data-toggle="dropdown"  class="nav-link nav-link-lg message-toggle"><i class="fas fa-bell"></i><span class="badge headerBadge1">0</span> </a><div class="dropdown-menu dropdown-list dropdown-menu-right pullDown"><div class="dropdown-header">Hiện tại không có đơn hàng mới !!!<div id="check-read-all" class="float-right"></div></div></div></li>');

        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Đã đọc tất cả đơn hàng mới nhất',
          showConfirmButton: false,
          timer: 1500
        })
				} else {
					alert("Error!");
				}	
				
			}
		});
	});
});
</script>

<script>
  function displayVals() {
    var singleValues = $( "#single" ).val();
    var singleValues2 = $( "#single option:selected" ).text();

  $("#name_sp").val(singleValues2);
  }
   
  $( "select" ).change( displayVals );
  displayVals();
  </script>


<script>
    
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$(document).ready(function(){
$('#change-status-web').change(function(e){
    // ngăn sự kiện change-status này khi click sẽ lan ra các sự kiện khác
    //thường áp dụng cho các button form hoặc thẻ link ( tag a )
      e.preventDefault();

      //lấy id nhóm sản phẩm từ thẻ td ( data-id )
      var id=$(this).parent().parent().data('id');
      var status=$(this).prop('checked')?1:0;

      //tạo biến global cho element đang click
      var change=$(this)
      var content=$(this).parent().find('.content-status')
      //nếu có id thì mới gửi ajax
      if(id){
          $.ajax({
              //tên route có url là ....
              url:"{{ route('changeStatus.web') }}",
              // kiểu method nên là post
              type:"post",

              //truyền biến id bà status
              data:{id:id,status:status}

              //nếu gửi thành công
          }).done(function(result){
            //nếu k nhận dc id
              if(result=='error'){
                  alert("Không nhận được id.");
              let old= change.prop('checked')?false:true;
                change.prop('checked',old)
                  //k cho chạy lệnh bên dưới nhờ return
                  return;
              }


              //nếu status là 1 ( hiện )
              if(status==1){
                  change.prop('checked','checked')
                  content.text('Đang bật bảo vệ trang web')
               
                  //k cho chạy lệnh bên dưới nhờ return
                  return;
              }
              else
              //nếu status là 0 ( ẩn )
                 
                  change.prop('checked','')
                  content.text('Đang tắt bảo vệ trang web')
                //nếu gửi thất bại
          }).fail(function(){
              let old= change.prop('checked')?false:true;
                change.prop('checked',old)
              alert("Xảy ra lỗi từ phía server.");
          })
      }
  })
}
)



</script>


</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>