@extends('admin.layoutadmin')
@section('pagetitle', "SỬA LOẠI BLOG")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
               
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-success text-white-all">
                  <li class="breadcrumb-item"><a href="{{asset('/')}}"><i class="fas fa-tachometer-alt"></i> TỔNG QUAN</a></li>
                  <li class="breadcrumb-item"><a href="{{route('loai-blog.index')}}"><i class="far fa-file"></i> LOẠI BLOG</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA LOẠI BLOG</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA TÊN LOẠI BLOG</h4>

        <div class="container">
            <div class="cart">
                <form id="form_validation" method="POST" action="{{route('loai-blog.update', $row->id_loaiblog)}}"   >
                  {{csrf_field()}}
                  {!! method_field('patch') !!}
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Tên Loại" value="{{$row->name_loaiblog}}" name="name_loaiblog">
                        @foreach($errors->get('name_loaiblog') as $error)
                          <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                    </div>
                   
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" @if ($row->Anhien == 1) checked @endif >
                            <label class="form-check-label" for="Hien">Hiện</label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                            <input type="radio" name="Anhien" id="An" class="with-gap" value="0" @if ($row->Anhien == 0) checked  @endif >
                            <label class="form-check-label" for="An">Ẩn</label>
                        </div>
                    </div>




                      </div>
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">LƯU DATABASE</button>
                    <button class="btn btn-danger" type="reset">HỦY</button>
                </form>


            </div>
        </div>
    </div>
      </div>
    </section>

  </div>
@endsection
