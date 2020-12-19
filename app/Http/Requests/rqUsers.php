<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:90',
            'email'=>'required|max:90|email',
            'phone'=>'required|size:10',
            'password'=>'required|max:60',
            'address'=>'required|max:255',
        ];
    }

    // public function messages() {
    //     return [    
    //         'name.required'=>'Tên không được để trống',
    //         'name.max'=>'Tên không quá 90 kí tự',
    //         'email.required'=>'Email không được để trống',
    //         'email.max'=>'Email không dài quá 90 kí tự',
    //         'email.email'=>'Email phải đúng định dạng',
    //         'phone.required'=>'Số điện thoại không được bỏ trống',
    //         'phone.size'=>'Số điện thoại phải 10 chữ số',
    //         'password.required'=>'Mật khẩu không được để trống',
    //         'password.max'=>'Mật khẩu không vượt quá 60 kí tự',
    //         'address.required'=>'Địa chỉ không được để trống',
    //         'address.max'=>'Mật khẩu không vượt quá 255 kí tự',
    //     ];
    //   }

}
