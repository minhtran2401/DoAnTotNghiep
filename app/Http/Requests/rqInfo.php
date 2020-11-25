<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqInfo extends FormRequest
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
            'sitename'=>'required|max:60',
            'sitelogo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'introduction'=>'required|max:255',
            'introduction'=>'required',
            'contactphone'=>'required|max:11',
            'contactphone2'=>'max:10',
            'contactphone3'=>'max:10',
            'contactemail'=>'required|max:60|email',
            'address'=>'required|max:255',
            'address2'=>'max:255',
            'address3'=>'max:255',
            'googlemap'=>'required|max:255',
        ];
    }

    public function messages() {
        return [    
             'sitename.required' => ':attribute không được bỏ trống',
             'sitename.max' => ':attribute không quá 60 kí tự',
             'address.required' => ':attribute không được bỏ trống',
             'address.max' => ':attribute không quá 255 kí tự',
             'introduction.required' => 'Phần giới thiệu không được bỏ trống',
             'address2.required' => ':attribute không được bỏ trống',
             'address2.max' => ':attribute không quá 255 kí tự',
             'address3.required' => ':attribute không được bỏ trống',
             'address3.max' => ':attribute không quá 255 kí tự',
             'contactphone.required' => ':attribute không được bỏ trống',
             'contactphone.max' => ':attribute không quá 10 kí tự',
             'address3.required' => ':attribute không được bỏ trống',
             'address3.max' => ':attribute không quá 255 kí tự',
             'address3.required' => ':attribute không được bỏ trống',
             'address3.max' => ':attribute không quá 255 kí tự',
             'contactemail.required' => ':attribute không được bỏ trống',
             'contactemail.max' => ':attribute không quá 60 kí tự',
             'contactemail.email' => ':attribute không phải là email',
             'sitelogo.required' => 'Hình không được bỏ trống',
             'sitelogo.image' => 'Đây không phải là hình ảnh',
             'sitelogo.mimes' => 'Không đúng định dạng ảnh',
             'sitelogo.max' => 'Liên kết hình ảnh không quá 255 kí tự',
             'googlemap.required' => 'Liên kết google map không được bỏ trống',
             'googlemap.max' => 'Liên kết không quá 255 kí tự',
        ];
      }

      public function attributes(){
        return [
           'sitename' => 'Tên trang web',
           'address' => 'Địa chỉ',
           'address2' => 'Địa chỉ2',
           'address3' => 'Địa chỉ3',
           'contactemail' => 'Email',
       ];
     }
}
