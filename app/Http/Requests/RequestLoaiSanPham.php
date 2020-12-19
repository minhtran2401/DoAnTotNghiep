<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestLoaiSanPham extends FormRequest
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
            'name_loaisp'=>'required|max:60',
            'icon_loaisp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'id_nhomsp'=>'required|max:50',

        ];
    }

    // public function messages() {
    //     return [    
    //          'name_loaisp.required' => ':attribute không được bỏ trống',
    //          'name_loaisp.max' => ':attribute không quá 60 kí tự',
    //          'icon_loaisp.required' => 'Hình không được bỏ trống',
    //          'icon_loaisp.image' => 'Đây không phải là hình ảnh',
    //          'icon_loaisp.mimes' => 'Không đúng định dạng ảnh',
    //          'icon_loaisp.max' => 'Link hình ảnh giới hạn 1024 kí tự',
    //          'id_nhomsp.required' => ':attribute không được bỏ trống',
    //          'id_nhomsp.max' => ':attribute không quá 60 kí tự',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'name_loaisp' => 'Tên loại sản phẩm',
    //        'id_nhomsp' => 'Nhóm sản phẩm',
    //    ];
    //  }
}
