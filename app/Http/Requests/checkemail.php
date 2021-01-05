<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkemail extends FormRequest
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
            // 'name' => ['required', 'string', 'max:30'],
            // 'phone' => 'required|regex:/(0)[0-9]{9}/',
            // // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email'=>'required|max:50|unique:email,email',

        ];
    }

    // public function messages() {
    //     return [    
    //         'email.email' => 'Email không đúng định dạng, hãy nhập lại !',
    //          'email.unique' => 'Email này đã được sử dụng !',
    //          'email.required' => 'Chưa nhập email !',
    //         //  'phone.regex' => 'Số điện thoại không đúng định dạng !',
    //         //  'name.regex' =>'Tên quá dài'
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'email' => 'Email',
          
    //    ];
    //  }
}
