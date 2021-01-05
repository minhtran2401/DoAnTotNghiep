<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Đăng Nhập </title>
    <base href="{{asset('/')}}">


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
  <section class="section">
    <div class="container mt-5">
        @if(session()->get('loi'))
        <div class=" alert alert-warning alert-dismissible fade show" role="alert">
          {{ session()->get('loi') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div> 
        @endif  
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="card card-primary">
            <div class="card-header">
              <h4  >Đăng Nhập Quản Trị</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('loginadmin') }}" class="needs-validation" novalidate="">
                @csrf

                <div class="form-group">
                    <label for="email" class="f-12">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="f-12">{{ __('Mật Khẩu') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Lưu Tài Khoản</label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('Đăng Nhập') }}   
                  </button>
                </div>
                <div class="form-row wrap-btn" >
                  {{ __('Hoặc đăng nhập với') }}
                  <a style="color: rgb(219, 40, 40); border :1px solid red ; margin-left:10px" href="{{route('re-fblogin','google')}}" class=" btn "><i class="fab fa-google"></i> Google Admin</a>          
              </div>
              </form>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<script src="{{asset('cssBE')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('cssBE')}}/js/isotope.js"></script>
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




<script src="{{asset('cssBE')}}/bundles/sweetalert/sweetalert.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/sweetalert.js"></script>

</body>
</html>