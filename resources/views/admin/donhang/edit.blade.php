@extends('admin.layoutadmin')
@section('pagetitle', "CẬP NHẬT ĐƠN HÀNG")
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
                  <li class="breadcrumb-item"><a href="{{route('don-hang.index')}}"><i class="far fa-file"></i> ĐƠN HÀNG</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> CẬP NHẬT ĐƠN HÀNG</li>
                  </ol>
                </nav>
            </div>
           
        </div>
        <div class="card">
          <div class="card-body">
            <h4>CẬP NHẬT ĐƠN HÀNG</h4>
       
        <div class="container">
          
               
            <div class="cart">
              <form class="" id="form_validation" method="POST" action="{{route('don-hang.update',$row->id_donhang)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                    <div class="form-group row" >

                    
                        <div class="col-md-6 row">
                        <div class="form-group  col-md-6">
                          <label for="name_nguoinhan">Tên người nhận</label>
                        <input type="text" class="form-control" value="{{$row->name_nguoinhan}}"  name="name_nguoinhan"  disabled>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name_loaisp">Số điện thoại</label>
                      <input type="text" class="form-control" value="{{$row->sdt_nguoinhan}}" name="sdt_nguoinhan"   disabled>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="email_nguoinhan">Email</label>
                      <input type="text" class="form-control" value="{{$row->email_nguoinhan}}"  name="email_nguoinhan" disabled >
                      </div>

                      <div class="form-group col-md-6">
                        <label for="email_nguoinhan">Địa chỉ giao hàng</label>
                      <input type="text" class="form-control" value="{{$row->diachi}}"  name="diachi"  disabled >
                      </div>

                      <div class="form-group col-md-12">
                        <label for="email_nguoinhan">Ghi Chú</label>
                      <textarea  disabled name="ghichu_donhang" class="form-control" id="" cols="30" rows="10">{!!$row->ghichu_donhang!!}</textarea>
                      </div>


                        <div class="form-group col-md-12">
                          <label for="id_tinhtrang">Tình trạng đơn hàng</label>
                          <select name="id_tinhtrang" class="form-control">
                            @foreach ($tinhtrang as $tt)
                            @if($row->id_tinhtrang == $tt->id_tinhtrang )
                            <option value='{{$tt->id_tinhtrang}}'selected>{{$tt->name_tinhtrang}}</option>  
                            @else
                            <option value='{{$tt->id_tinhtrang}}' >{{$tt->name_tinhtrang}}</option>  
                            @endif
                            @endforeach 
                          </select>
                      </div>
                      
                  </div>

                  <div class="col-md-6">
                    <div class="header text-center"><b class="text-success"> Chi Tiết Hóa Đơn </b></div>
                    <hr>
                      <div class="accordion" id="accordionExample">
                        <div style="border-radius:10px" class="card">
                          <div class=" card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class=" btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOnez" aria-expanded="true" aria-controls="collapseOne">
                               Click để xem chi tiết hóa đơn
                              </button>
                            </h2>
                          </div>
                          <div id="collapseOnez" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr >
                          <th class="no">#</th>
                          <th class="desc">SẢN PHẨM</th>
                          <th class="unit">GIÁ</th>
                          <th class="qty">SỐ LƯỢNG</th>
                          <th class="total">TỔNG CỘNG</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $tong = 0;
                        ?>
                      </div>
                      @foreach ($chitiet as $ct)
                      <tr>
                        <td class="no">{{$loop->iteration}}</td>
                        <td class="desc"> @php
                          $id_sanpham = $ct->id_sanpham;
                          $name = App\SanPham::find($id_sanpham);
                          $gia = $ct->chitietdonhang_tongtien / $ct->chitietdonhang_soluong;
                          $donvi = $name->id_donvitinh;
                          $donvitinh = App\DonVi::find($donvi);
                        
                          echo $name->name_sp;
                          @endphp</td>
                         
                        <td class="unit">{{number_format($gia)}} đ</td>
                        <td class="qty">{{$ct->chitietdonhang_soluong}} {{$donvitinh->name_donvi}}</td>
                        <td class="total"> {{number_format($ct->chitietdonhang_tongtien)}} đ</td>
                        </tr>
                        @php
                        $tong += $ct->chitietdonhang_tongtien;
                         @endphp
                        @endforeach
                      </tbody>
                     
                      <tfoot>
                       
                        <tr>
                          <td colspan="2"></td>
                          <td colspan="2"><b> TẠM TÍNH : </b></td>
                        <td>
                            {{number_format($tong)}} đ
                          </td>
                        </tr>

                          <tr>
                            <td colspan="2"></td>
                            <td colspan="2"><b> MÃ GIẢM GIÁ : </b></td>
                            @php
                              $giamgia = $row->tongtien_donhang - $tong;
                            @endphp
                            @if($giamgia == 0)
                           <td>KHÔNG CÓ</td>
                            @else
                            <td> {{number_format($giamgia)}} đ</td>
                            @endif
                          </tr>
                          <tr>
                            <td colspan="2"></td>
                            <td colspan="2"><b> TỔNG CỘNG : </b></td>
                          <td>{{number_format($row->tongtien_donhang)}} đ</td>
                          </tr>
                      </tfoot>
                    </table>
                  
                  
                  </div>
                </div>
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
 
