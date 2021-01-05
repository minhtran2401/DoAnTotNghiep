<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqSocial extends FormRequest
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
            'snslink'=>'required|max:255',
            'snsicon'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ];
    }

    // public function messages() {
    //     return [    
    //          'snslink.required' => ':attribute không được bỏ trống',
    //          'snslink.max' => ':attribute không quá 255 kí tự',
    //          'snsicon.required' => 'Hình không được bỏ trống',
    //          'snsicon.image' => 'Đây không phải là hình ảnh',
    //          'snsicon.mimes' => 'Không đúng định dạng ảnh',
    //          'snsicon.max' => 'Hình không quá 1024 kí tự',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'snslink' => 'Liên kết',
    //    ];
    //  }
}
