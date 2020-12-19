<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqBlog extends FormRequest
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
            'id_loaiblog'=>'required',
            'img_blog'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'tomtat_blog'=>'required|max:255',
            'name_blog'=>'required|max:90',
            'noidung_blog'=>'required',
            'tag_blog'=>'required',
        ];
    }

    // public function messages() {
    //     return [    
    //          'id_loaiblog.required' => ':attribute không được bỏ trống',
    //          'tomtat_blog.required' => ':attribute không được bỏ trống',
    //          'name_blog.required' => ':attribute không được bỏ trống',
    //          'name_blog.max' => ':attribute không quá 90 kí tự',
    //          'noidung_blog.required' => ':attribute không được bỏ trống',
    //          'tomtat_blog.max' => ':attribute không quá 255 kí tự',
    //          'img_blog.required' => 'Hình không được bỏ trống',
    //          'img_blog.image' => 'Đây không phải là hình ảnh',
    //          'img_blog.mimes' => 'Không đúng định dạng ảnh',
    //          'img_blog.max' => 'Liên kết ảnh không quá 1024 kí tự',
    //          'tag_blog.required' => 'Tag không được bỏ trống',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //         'id_loaiblog'=>'Loại blog',
    //         'tomtat_blog'=>'Tóm tắt',
    //         'name_blog'=>'Tên blog',
    //         'img_blog'=>'Hình ảnh',
    //         'noidung_blog'=>'Nội dung',
    //    ];
    //  }
}
