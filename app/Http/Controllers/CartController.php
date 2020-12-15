<?php

namespace App\Http\Controllers;
use App\Mail\DonHangNotify;
use Illuminate\Http\Request;
use DB;
use App\Cart;
use App\Counpon;
use App\DonHang;
use App\KhoHang;
use App\ChiTietHD;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


session_start();


class CartController extends Controller
{
   

    public function AddCart(Request $req ,$id){
        $product = DB::table('sanpham')->where('id_sanpham',$id)
        ->join('donvitinh','donvitinh.id_donvitinh','sanpham.id_donvitinh')
        ->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            $req->Session()->put('Cart', $newCart);  
            // dd($product);
        }
        return view('FE.layouts.cart_component.rendercart');
    }

    // day nha:
    public function AddCartDetail(Request $req ,$id){
        $qty_sp = $req->get('qty_sp');
        $product = DB::table('sanpham')
        ->join('donvitinh','donvitinh.id_donvitinh','sanpham.id_donvitinh')
        ->where('id_sanpham',$id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCartDetail($product, $id, $qty_sp);
            $req->Session()->put('Cart', $newCart);

        }
        return view('FE.layouts.cart_component.rendercart');
    }



    public function DeleteItemCart(Request $req ,$id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count( $newCart->products) > 0 ){
            $req->Session()->put('Cart', $newCart);
        }
        else{
            $req->Session()->forget('Cart');
        }
        return view('FE.layouts.cart_component.rendercart');
    }

   

    public function DeleteListItemCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count( $newCart->products) > 0 ){
            $req->Session()->put('Cart', $newCart);
        }
        else{
            $req->Session()->forget('Cart');
        }
        return view('FE.shopping_cart.render-list-cart');
    }


    public function SaveListItemCart(Request $req, $id, $quanty){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);

        $req->Session()->put('Cart', $newCart);
        
        return view('FE.shopping_cart.render-list-cart');
    }

     public function SaveAllListItemCart(Request $req)
    {

        foreach($req->data as $item){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item["key"], $item["value"]);
            $req->Session()->put('Cart',$newCart);

        }
    }

    public function DelAllListItemCart(Request $req)
    {
        Session::forget('coupon');
        Session::forget('Cart');
    }
    // mã giảm giá giỏ hàng
    public function check_coupon(Request $request){
        $timenow = Carbon::now('Asia/Ho_Chi_Minh');
        $data = $request->all();
        $coupon = Counpon::where('counpon_code',$data['coupon'])->where('counpon_quanty','>',0)->where('Anhien','1')->where('counpon_time','>', $timenow)->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session = Session::get('coupon');
                $checkgiatong = Session::get('Cart')->totalPrice;
                $checkgia = $coupon->counpon_number;
                $double = number_format($checkgia * 2);
                // $kiemtragia = $checkgia - $checkgiatong;
                
                if($checkgia < ($checkgiatong / 2)) {
                if($coupon_session==true){
                    $is_avaiable = 0;
                    if($is_avaiable==0){
                        $cou[] = array(
                            'counpon_id' => $coupon->counpon_id,
                            'counpon_code' => $coupon->counpon_code,
                            'counpon_type' => $coupon->counpon_type,
                            'counpon_number' => $coupon->counpon_number,
                            'counpon_quanty' => $coupon->counpon_quanty,

                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                    $cou[] = array(
                        'counpon_id' => $coupon->counpon_id,
                        'counpon_code' => $coupon->counpon_code,
                        'counpon_type' => $coupon->counpon_type,
                        'counpon_number' => $coupon->counpon_number,
                        'counpon_quanty' => $coupon->counpon_quanty,
                        );
                    Session::put('coupon',$cou);
                }
                Session::save();
                toast('Đã áp dụng mã giảm giá !','success');
                }
                else{
                toast("Mã giảm giá không đủ điều kiện sử dụng , áp dụng cho hóa đơn từ $double đ trở lên !","warning");
                }
                return redirect()->back();
            }

        }else{
            toast('Mã giảm giá không đúng hoặc hết giá trị sử dụng, thử lại !','error');
            return redirect()->back();
        }
    }   

    public function unset_coupon(){
		$coupon = Session::get('coupon');
        if($coupon==true){
          
            Session::forget('coupon');
            toast('Xóa mã khuyến mãi thành công !','success');
            return redirect()->back();
        }
    }
    
    public function thanhtoan(Request $request){

        $validatedData = $request->validate([
            'name_nguoinhan' => 'required',
            'email_nguoinhan' => 'required',
            'sdt_nguoinhan' => 'required',
            'diachi' => 'required',
        ]);

            $tt = new DonHang;
            $tt->name_nguoinhan  = $request->get('name_nguoinhan');
            $tt->email_nguoinhan = $request->get('email_nguoinhan');
            $tt->sdt_nguoinhan = $request->get('sdt_nguoinhan');
            $tt->ghichu_donhang  = $request->get('ghichu_donhang');
            $tt->diachi  = $request->get('diachi');
            $tt->tongtien_donhang = $request->get('tongtien_donhang');
            $tt->id = $request->get('id');
            $tt->id_tinhtrang = 1;
            $tt->save();

            $content =  Session::get('Cart')->products;
       
            foreach ($content as $item) {
            $ct = new ChiTietHD;
            $ct->id_donhang = $tt->id_donhang;
            $ct->id_sanpham = $item['productInfo']->id_sanpham; 
            $ct->chitietdonhang_soluong = $item['quanty'];
            $ct->chitietdonhang_tongtien = $item['price'] ;
            $ct ->save();   
            $sp = KhoHang ::where('sku', $item['productInfo']->sku)->select('sku','khohang_soluong')->get();
            foreach($sp as $kho){
                $sku = $kho->sku;
                $soluong = $kho->khohang_soluong;
                $revalue = $soluong - $ct->chitietdonhang_soluong;
            }
            
      
            DB::update("update khohang set khohang_soluong  = $revalue  where sku = $sku");
            if(   Session::get('coupon')){
                $cp = Session::get('coupon');
                foreach($cp as $c=> $b ){
                $rec = $b['counpon_quanty'] - 1;
                $id_code = $b['counpon_id'];
               
                }
                
                   DB::update("update counpon set counpon_quanty  = $rec  where counpon_id = $id_code");
            }
         
            }      

           
        // toast('Đặt hàng thành công','success');
        alert()->success('Đặt hàng thành công','Bạn có thể kiểm tra hóa đơn qua địa chỉ email đã đăng kí.');
            
     



        $customer_email = $request->all();
        //  dd($customer_email['email_nguoinhan']);
        $title = "CẢM ƠN BẠN ĐÃ MUA SẢN PHẨM ! ";
        $name = "CỬA HÀNG THỰC PHẨM GREENFRESH";
        $phone = "0327485717";
       
        $body = "Sự tin tưởng và ủng hộ của bạn là niềm vinh hạnh cho công ty chúng tôi. Chúng tôi luôn đặt sự uy tín và chất lượng lên hàng đầu! Bạn hãy ghé thăm và xem thử các sản phẩm khác nhé!";
        $data = ['title' => $title, 'name'=> $name, 'phone' => $phone,'body' => $body];
        Mail::to($customer_email['email_nguoinhan'])->send(new DonHangNotify($data));
        Session::forget('coupon');
        Session::forget('Cart');
        return redirect()->route('index');
    }
}
