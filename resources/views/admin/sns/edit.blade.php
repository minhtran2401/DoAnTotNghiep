@extends('admin.layoutadmin')
@section('pagetitle', "SỬA THUƠNG HIỆU")
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
                  <li class="breadcrumb-item"><a href="{{route('sns.index')}}"><i class="far fa-file"></i> MẠNG XÃ HỘI</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> SỬA MẠNG XÃ HỘI</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>SỬA MẠNG XÃ HỘI</h4>
       
        <div class="container">
          
               
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('sns.update',$row->id)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row">
                      <div class="form-group container row">
                        <div class="col-md-2">
                        <div class="chocolat-parent">
                          <a href="{{asset('snsicon')}}/{{$row->snsicon}}" class="chocolat-image">
                            <div data-crop-image="75">
                            <img alt="image" src="{{asset('snsicon')}}/{{$row->snsicon}}"  class="avatar avatar-xl">
                            </div>
                          </a>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="snslink">Link</label>
                        <input type="text" class="form-control" value="{{$row->snslink}}" placeholder="" name="snslink" required>
                        @foreach($errors->get('snslink') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                      </div>

                      <div class="col-md-10">
                        <input type="file" class="form-control" name="snsicon">
                        @foreach($errors->get('snsicon') as $error)
                              <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                      </div>
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
 
