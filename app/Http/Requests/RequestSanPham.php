<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSanPham extends FormRequest
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
            'name_sp'=>'required|max:60',
            'price_sp'=>'required',
            'id_nhomsp'=>'required',
            'id_loaisp'=>'required',
            'id_thuonghieu'=>'required',
            'motangan_sp'=>'required',
            'motadai_sp'=>'required',
            'img_sp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',

        ];
    }

    // public function messages() {
    //     return [    
    //         'name_sp.required' => ':attribute không được bỏ trống',
    //         'name_sp.max' => ':attribute không được quá 60 kí tự',
    //         'price_sp.required' => ':attribute không được bỏ trống',
    //         'id_nhomsp.required' => 'Nhóm sản phẩm không được bỏ trống',
    //         'id_loaisp.required' => 'Loại sản phẩm không được bỏ trống',
    //         'id_thuonghieu.required' => 'Thương hiệu không được bỏ trống',
    //         'img_sp.required' => 'Hình không được bỏ trống',
    //         'img_sp.image' => 'Đây không phải là hình ảnh',
    //         'img_sp.mimes' => 'Không đúng định dạng ảnh',
    //         'img_sp.max' => 'Liên kết hình ảnh không quá 1024 kí tự',
    //         'motadai_sp.required' => 'Mô tả dài không được để trống',
    //         'motangan_sp.required' => 'Mô tả ngắn không được để trống',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'name_sp' => 'Tên sản phẩm',
    //        'price_sp' => 'Giá sản phẩm',
    //    ];
    //  }
}
