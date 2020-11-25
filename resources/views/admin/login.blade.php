<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Đăng Nhập </title>
    <base href="{{asset('/')}}">


<!--zoomimage-->
<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/chocolat/dist/css/chocolat.css">

<!--dropzone-->
<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/dropzonejs/dropzone.css">

  <!--alert-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/izitoast/css/iziToast.min.css">


 <!--modal-->
 <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/prism/prism.css">

  <!--datepicker-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <!--editor-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/jquery-selectric/selectric.css">

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
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="f-12">{{ __('Mật Khẩu') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
<!--editor-->
<script src="{{asset('cssBE')}}/bundles/summernote/summernote-bs4.js"></script>
<script src="{{asset('cssBE')}}/bundles/codemirror/lib/codemirror.js"></script>
<script src="{{asset('cssBE')}}/bundles/codemirror/mode/javascript/javascript.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/ckeditor/ckeditor.js"></script>
<script src="{{asset('cssBE')}}/js/page/ckeditor.js"></script>

<!--datepicker-->

<script src="{{asset('cssBE')}}/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{asset('cssBE')}}/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/forms-advanced-forms.js"></script>

<!--drozone-->
<script src="{{asset('cssBE')}}/bundles/dropzonejs/min/dropzone.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/multiple-upload.js"></script>

<script src="{{asset('cssBE')}}/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-ui/jquery-ui.min.js"></script>

<!--alertfloat-->
<script src="{{asset('cssBE')}}/bundles/izitoast/js/iziToast.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/toastr.js"></script>

<!--sweetalert-->
<script src="{{asset('cssBE')}}/bundles/sweetalert/sweetalert.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/sweetalert.js"></script>

</body>
</html>

