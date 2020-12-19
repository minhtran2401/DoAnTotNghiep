<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestThuongHieu extends FormRequest
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
            'name_thuonghieu'=>'required|max:90',
            'sdt_thuonghieu'=>'required|size:10',
            'link_thuonghieu'=>'required|max:255',
            'img_thuonghieu'=>'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',

        ];
    }

    // public function messages() {
    //     return [    
    //          'name_thuonghieu.required' => ':attribute không được bỏ trống',
    //          'name_thuonghieu.max' => ':attribute không được quá 60 kí tự',
    //          'img_thuonghieu.required' => 'Hình không được bỏ trống',
    //          'img_thuonghieu.image' => 'Đây không phải là hình ảnh',
    //          'img_thuonghieu.max' => 'Hình ảnh không quá 1024 kí tự',
    //          'img_thuonghieu.mimes' => 'Không đúng định dạng ảnh',
    //          'sdt_thuonghieu.required' => ':attribute không được` để trống',
    //          'sdt_thuonghieu.size' => ':attribute phải đúng 10 chữ số',
    //          'link_thuonghieu.required' => ':attribute không được để trống',
    //          'link_thuonghieu.size' => ':attribute không được quá 255 kí tự',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'name_thuonghieu' => 'Tên thương hiệu',
    //        'sdt_thuonghieu' => 'Số điện thoại',
    //        'link_thuonghieu' => 'Liên kết',
    //    ];
    //  }
}
