<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <style>
 

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-size: 14px; 
  font-family: 'KoHo';
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}


  </style>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{asset('siteinfo')}}/logo.jpg">
      </div>
      <div id="company">
      <h2 class="name">CỬA HÀNG {{$info->sitename}}</h2>
      <div>{{$info->address}}</div>
      <div>{{$info->contactphone}}</div>
      <div><a href="mailto:{{$info->contactemail}}">{{$info->contactemail}}</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">HÓA ĐƠN CỦA:</div>
        <h2 class="name">{{$infokh->name_nguoinhan}}</h2>
        <div class="address">{{$infokh->diachi}}</div>
        <div class="email"><a href="mailto:{{$infokh->email_nguoinhan}}">{{$infokh->email_nguoinhan}}</a></div>
        </div>
        <div id="invoice">
        <h1>HÓA ĐƠN SỐ #{{$infokh->id_donhang}}</h1>
        <div class="date">Ngày mua hàng: {{date('d-m-Y', strtotime($infokh->created_at))}}</div>
        
        </div>
      </div>
      <table class="table" border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">SẢN PHẨM</th>
            <th class="unit">GIÁ</th>
            <th class="qty">SỐ LƯỢNG</th>
            <th class="total">TỔNG CỘNG</th>
          </tr>
        </thead>
        <tbody>
          @if(Session::has("Cart") !=null)
          @foreach(Session::get('Cart')->products as $item)
          
          <tr>
          <td class="no">{{ $loop->iteration }}</td>
          <td class="desc"><h3>{{$item['productInfo']->name_sp}}</h3></td>
          @if($item['productInfo']->old_price_sp != null)
          <td class="unit"><span><del>{{number_format($item['productInfo']->old_price_sp)}}</del></span> {{number_format($item['productInfo']->price_sp)}} đ</td>
          @else
          <td class="unit">{{number_format($item['productInfo']->price_sp)}} đ</td>
          @endif
          <td class="qty"> {{$item['productInfo']->name_donvi}} X {{$item['quanty']}} </td>
            <td class="total">{{number_format($item['price'])}} đ</td>
          </tr>
          @endforeach
          @endif
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TẠM TÍNH :</td>
            <td>{{number_format(Session::get('Cart')->totalPrice)}} đ</td>
          </tr>
          @if(Session::has("Cart") != null && Session::get('coupon')  )
          @foreach(Session::get('coupon') as $key => $cou)
          @if($cou['counpon_type']==0)
          @php
          $total_coupon = (Session::get('Cart')->totalPrice*$cou['counpon_number'])/100;
          $total_price_then = (Session::get('Cart')->totalPrice - $total_coupon);
          @endphp
           @elseif($cou['counpon_type']==1)
           @php
           $total_coupon =  $cou['counpon_number'];
           $total_price_then = (Session::get('Cart')->totalPrice - $total_coupon);
           @endphp
            @else
            @endif
            @endforeach
            <tr>
              <td colspan="2"></td>
              <td colspan="2">MÃ GIẢM GIÁ :</td>
              <td>- {{number_format($total_coupon)}} đ</td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">TỔNG CỘNG :</td>
              <td>{{number_format($total_price_then)}} đ</td>
            </tr>
            @else
            <tr>
              <td colspan="2"></td>
              <td colspan="2">TỔNG CỘNG :</td>
              <td>{{number_format(Session::get('Cart')->totalPrice)}} đ</td>
            </tr>
            @endif
           
         
         
         
        </tfoot>
      </table>
      <div id="thanks">Cảm ơn bạn đã chọn mua sắm ở cửa hàng chúng tôi!</div>
      <div id="notices">
        <div>Ghi chú:</div>
        <div class="notice">Giữ hóa đơn này để được hỗ trợ nếu như đơn hàng có vấn đề.</div>
      </div>
    </main>
    <footer>
      Hóa đơn được tạo tự động từ hệ thống, hoàn toàn hợp lệ và không cần chữ kí.
    </footer>
  </body>
</html>