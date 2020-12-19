<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqLoaiBlog extends FormRequest
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
            'name_loaiblog'=>'required|max:60',
        ];
    }

    // public function messages() {
    //     return [    
    //         'name_loaiblog.required' => ':attribute không được để trống',
    //         'name_loaiblog.max' => ':attribute không quá 60 kí tự',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //         'name_loaiblog'=>'Tên loại blog',
    //    ];
    //  }
}
