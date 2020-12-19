<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDonViTinh extends FormRequest
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
            'name_donvi'=>'required|max:60',
        ];
    }

    // public function messages() {
    //     return [    
    //          'name_donvi.required' => ':attribute không được bỏ trống',
    //          'name_donvi.max' => ':attribute không quá 60 kí tự', 
    //         ];
    //   }

    //   public function attributes(){
    //     return [
    //        'name_donvi' => 'Tên đơn vị',
    //    ];
    //  }
}
