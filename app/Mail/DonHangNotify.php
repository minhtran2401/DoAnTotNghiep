<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonHangNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'contactgreenfresh@gmail.com';
        $subject = 'Hóa đơn thanh toán';
        $name = 'CỬA HÀNG THỰC PHẨM GREENFRESH';
        // $products = DB::table('sanpham')
        // ->limit(3)->get();
        return $this->view('FE.emails.callback_billing')
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
