<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkmgg extends FormRequest
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
            'counpon_code'=>'required|max:50|unique:counpon,counpon_code',
        ];
    }

    // public function messages() {
    //     return [    
    //          'counpon_code.unique' => ':attribute đã tồn tại trong hệ thống, hãy nhập mã khác',
    //          'counpon_code.required' => 'Chưa Nhập Mã Khuyến Mãi',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'counpon_code' => 'Mã khuyến mãi',
    //    ];
    //  }
}
