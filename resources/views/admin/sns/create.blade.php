@extends('admin.layoutadmin')
@section('pagetitle', "THÊM MẠNG XÃ HỘI")
@section('main')

<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
            <div class="row">
              <div class="col-lg-7 col-md-6 col-sm-12">
                 
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-success text-white-all">
                    <li class="breadcrumb-item"><a href="{{asset('/')}}"><i class="fas fa-tachometer-alt"></i> TỔNG QUAN</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sns.index')}}"><i class="far fa-file"></i> MẠNG XÃ HỘI</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> THÊM MẠNG XÃ HỘI</li>
                    </ol>
                  </nav>
              </div>
             
          </div>
          <div class="card">
            <div class="card-body">
              <h4>THÊM MẠNG XÃ HỘI</h4>
              
             

        <div class="block-header">
        <div class="container">
        <div class="cart">
              <form method="POST" action="{{route('sns.store')}}" enctype="multipart/form-data" >
                @csrf
                    <div class="form-group row" >
                      <div class="form-group col-md-12">
                          <label for="snsicon">Icon</label>
                          <input type="file" class="form-control" name="snsicon" >
                          @foreach($errors->get('snsicon') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                      </div>
                      <div class="form-group col-md-6">
                          <label for="snslink">Link</label>
                          <input type="text" class="form-control" placeholder="Link" name="snslink" >
                          @foreach($errors->get('snslink') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
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


