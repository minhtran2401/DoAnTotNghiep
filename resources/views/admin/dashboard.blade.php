@extends('admin.layoutadmin')
@section('pagetitle', 'QUẢN LÍ ADMIN ')
@section('main')
@include('sweetalert::alert')

<div class="main-content">
  <section class="section">
    <div class="row ">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Đơn Hàng</h5>
                  <h2 class="mb-3 font-18">{{count($countbill)}}</h2>
                  <a href="{{route('don-hang.index')}}" class="mb-0"><span class="col-green">Chi tiết</span> <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                  <img src="{{asset('cssBE')}}/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15"> Khách Hàng</h5>
                    <h2 class="mb-3 font-18">{{count($countuser)}}</h2>
                    <a href="{{route('don-hang.index')}}" class="mb-0"><span class="col-green">Chi tiết</span> <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('cssBE')}}/img/banner/2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Sản Phẩm</h5>
                    <h2 class="mb-3 font-18">{{count($countproduct)}}</h2>
                   <a href="{{route('san-pham.index')}}" class="mb-0"><span class="col-green">Chi tiết</span> <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i> </a>

                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('cssBE')}}/img/banner/3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Blog</h5>
                    <h2 class="mb-3 font-18">{{count($countblog)}}</h2>
                    <a href="{{route('blog.index')}}" class="mb-0"><span class="col-green">Chi tiết</span> <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('cssBE')}}/img/banner/1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Top 20 sản phẩm bán chạy</h4>
          </div>
          <div class="card-body">
            <div id="sanphambanchay" class="chartsh"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Top khách hàng tiềm năng</h4>
          </div>
          <div class="card-body">
            <div class="summary">
              <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                <div id="khachhangtiemnang" class="chartsh"></div>
              </div>
              <div data-tab-group="summary-tab" id="summary-text">
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-12 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            <h4>Thống kê hàng tồn kho</h4>
          </div>
          <div class="card-body">
            <div id="chart2" class="chartsh"></div>
          </div>
        </div>
      </div> --}}
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4>Biểu Đồ Thể Hiện Thu Nhập </h4>
          </div>
          <div class="card-body">
            <div class="recent-report__chart">
              <div id="thongkethunhap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="row">     
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4>Biểu Đồ Thể Hiện Đơn Hàng</h4>
          </div>
          <div class="card-body">
            <div class="recent-report__chart">
              <div id="donhanghangngay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4>Biểu Đồ Quan Hệ Sản Phẩm </h4>
          </div>
          <div class="card-body">
            <div class="recent-report__chart">
              <div id="thongkesanpham"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4>Biểu Đồ Số Lượng Sản Phẩm </h4>
          </div>
          <div class="card-body">
            <div class="recent-report__chart">
              <div  id="thongkesoluongsanpham"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

  </section>
 
</div>

@endsection
@section('jsc')

<script src="{{asset('cssBE')}}/bundles/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/index.js"></script>
{{-- <script src="{{asset('cssBE')}}/js/page/chart-amchart.js"></script> --}}

<!-- Styles -->

<script>
  var API_URL = "{{ route('api.index') }}";
</script>
  <!-- Resources -->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/wordCloud.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/frozen.js"></script>


<script src="{{ asset('cssBE/js/dashboard/bieudo.js') }}" type="text/javascript"></script>

  

@endsection