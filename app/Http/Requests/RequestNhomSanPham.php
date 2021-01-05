<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestNhomSanPham extends FormRequest
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
            'name_nhomsp'=>'required|max:60',
            'icon_nhomsp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }

    // public function messages() {
    //     return [    
    //          'name_nhomsp.required' => ':attribute không được bỏ trống',
    //          'name_nhomsp.max' => ':attribute không quá 60 kí tự',
    //          'icon_nhomsp.required' => 'Hình không được bỏ trống',
    //          'icon_nhomsp.image' => 'Đây không phải là hình ảnh',
    //          'icon_nhomsp.mimes' => 'Không đúng định dạng ảnh',
    //          'icon_nhomsp.max' => 'Hình không quá 2048 kí tự',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'name_nhomsp' => 'Tên nhón sản phẩm',
    //    ];
    //  }
}
