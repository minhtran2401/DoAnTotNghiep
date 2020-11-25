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
            'img_sp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }

    public function messages() {
        return [    
             'name_sp.required' => ':attribute không được bỏ trống',
             'name_sp.max' => ':attribute không được quá 60 kí tự',
             'img_sp.required' => 'Hình không được bỏ trống',
             'img_sp.image' => 'Đây không phải là hình ảnh',
             'img_sp.mimes' => 'Không đúng định dạng ảnh',
             'img_sp.max' => 'Liên kết hình ảnh không quá 2048 kí tự',
        ];
      }

      public function attributes(){
        return [
           'name_sp' => 'Tên sản phẩm',
       ];
     }
}
