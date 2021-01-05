<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqTuyenDung extends FormRequest
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
            'name_tuyendung'=>'required|max:90',
            'noidung_tuyendung'=>'required',
        ];
    }

    // public function messages() {
    //     return [    
    //         'name_tuyendung.required'=>':attribute không được để trống',
    //         'name_tuyendung.max'=>':attribute không quá 90 kí tự',
    //         'noidung_tuyendung.required'=>':attribute không được để trống',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'name_tuyendung'=>'Tên tuyển dụng',
    //         'noidung_tuyendung'=>'Nội dung tuyển dụng',
    //    ];
    //  }
}
