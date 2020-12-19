<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rqKhoHang extends FormRequest
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
            'khohang_name'=>'required',
            'khohang_soluong'=>'required',
            'khohang_donvi'=>'required',
            'khohang_ngaynhap'=>'required',
            'khohang_hsd'=>'required',
            // 'khohang_trangthai'=>'required',
        ];
    }

    // public function messages() {
    //     return [    
    //          'khohang_name.required' => ':attribute không được bỏ trống',
    //         //  'khohang_name.unique' => ':attribute đã tồn tại',
    //          'khohang_donvi.required' => 'Đơn vị không được bỏ trống',
    //          'khohang_soluong.required' => 'Số lượng không được để trống',
    //          'khohang_ngaynhap.required' => 'Ngày nhập không được để trống',
    //          'khohang_hsd.required' => 'Hạn sử dụng không được để trống',
    //         //  'khohang_trangthai.required' => 'Trạng thái không được để trống',
    //     ];
    //   }

    //   public function attributes(){
    //     return [
    //        'khohang_name' => 'Tên kho hàng',
    //    ];
    //  }
}
