<?php

namespace App\Http\Controllers;
use App\RegEmail;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
// use Mail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\checkemail;



class EmailController extends Controller
{
    public function getForm(){
        return view('FormRequest');
    }

    public function sendEmail(checkemail $request)
    {
    $this->validate($request, [
        'email'=>'required|max:50|unique:email,email',
    ]);
        // fuck you like add variable or request nếu muốn ;))
        $customer_email = $request->all();
        $title = "CẢM ƠN BẠN ĐÃ ĐĂNG KÍ NHẬN THÔNG BÁO ! ";
        $name = "CỬA HÀNG THỰC PHẨM GREENFRESH";
        $phone = "0327485717";
       
        $body = "Sự tin tưởng và ủng hộ của bạn là niềm vinh hạnh cho công ty chúng tôi. Chúng tôi luôn đặt sự uy tín và chất lượng lên hàng đầu! Bạn hãy ghé thăm và xem thử các sản phẩm khác nhé!";
        $data = ['title' => $title, 'name'=> $name, 'phone' => $phone,'body' => $body];
        Mail::to($customer_email['email'])->send(new MailNotify($data));
        
        $regemail = new RegEmail([
            'email' => $request->get('email')
        ]);
        $saved =  $regemail->save();

        if ($saved){
            alert()->success('Đăng Kí Thành Công', 'Bạn sẽ nhận được thông báo khi chúng tôi có những ưu đãi mới nhất !!');
        }
        elseif(!$saved){
            alert()->error('Đăng Kí Thất Bại', 'Bạn đã đăng kí bằng email này rồi !!');
           
        }

        return redirect()->back();

        // hoặc có thể dùng alert('Post Created','Successfully', 'success');
       
    }
}
