<?php

namespace App\Mail;
use DB;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'contactgreenfresh@gmail.com';
        $subject = 'Cảm ơn bạn đã đăng kí !';
        $name = 'CỬA HÀNG THỰC PHẨM GREENFRESH';
        // $products = DB::table('sanpham')
        // ->limit(3)->get();
        return $this->view('FE.emails.callback')
                    ->from($address, $name)
                    // can thi bo them vao:
                    //->cc($address, $name)
                    // ->bcc($address, $name)
                    ->replyTo('contactgreenfresh@gmail.com', 'GREENFRESH')
                    ->subject($subject)
                    ->with([ 'name' => $this->data['name'],  'phone' => $this->data['phone'], 'body' => $this->data['body']]);
                    // 'products' => $this->data['products'],
    }
}