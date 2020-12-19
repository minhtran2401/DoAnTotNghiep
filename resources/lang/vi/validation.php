<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không phải là liên kết.',
    'after' => ':attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => ':attribute chỉ có đúng hoặc sai.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => ':attribute không đúng định dạng ngày tháng.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute phải đúng định dạng.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => ':attribute phải là tệp tin.',
    'filled' => ':attribute phải có giá trị.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute phải là hình ảnh.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute không vượt quá :max.',
        'file' => 'Dung lượng :attribute cao nhất là: :max Kb.',
        'string' => ':attribute không quá :max kí tự.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'Dung lượng :attribute ít nhất là: :min Kb.',
        'string' => ':attribute không được ít hơn :min kí tự.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute không đúng định dạng.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => ':attribute không đúng định dạng.',
    'required' => ':attribute không được để trống.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'Dung lượng :attribute phải là: :size Kb.',
        'string' => ':attribute phải nhập :size kí tự.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ' :attribute đã được sử dụng trước đó.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => ':attribute không đúng định dạng.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
            'unique' => 'đã được sử dụng',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        // user 
        'phone' => 'Số điện thoại',
        'name' => 'Tên',
        'password' => 'Mật khẩu',
        'email' => 'Địa chỉ email',
        'address'=>'Địa chỉ',

        // thông tin trang web
        'sitename' => 'Tên trang web',
        'address' => 'Địa chỉ',
        'address2' => 'Địa chỉ',
        'address3' => 'Địa chỉ',
        'contactemail' => 'Địa chỉ email',
        'contactphone' => 'Số điện thoại liên hệ',
        'contactphone2' => 'Số điện thoại liên hệ',
        'contactphone3' => 'Số điện thoại liên hệ',
        'sitelogo' => 'Logo trang web',

        // kho hàng
        'khohang_name'=>'Tên kho hàng',
        'khohang_soluong'=>'Số lượng',
        'khohang_donvi'=>'Đơn vị',
        'khohang_ngaynhap'=>'Ngày nhập',
        'khohang_hsd'=>'Hạn sử dụng',

        // loại blog
        'name_loaiblog'=>'Tên loại bài viết',

        // liên kết mạng 
        'snslink'=>'Liên kết',
        'snsicon'=>'Biểu tượng',

        // tuyển dụng
        'name_tuyendung'=>'Tên tuyển dụng',
        'noidung_tuyendung'=>'Nội dung tuyển dụng',

        // blog
        'id_loaiblog'=>'Loại bài viết',
        'tomtat_blog'=>'Tóm tắt bài viết',
        'name_blog'=>'Tiêu đề bài viết',
        'img_blog'=>'Hình ảnh',
        'noidung_blog'=>'Nội dung bài viết',
        'tag_blog'=>'Thẻ',

        // Thương hiệu
        'name_thuonghieu' => 'Tên thương hiệu',
        'sdt_thuonghieu' => 'Số điện thoại',
        'link_thuonghieu' => 'Liên kết',
        'img_thuonghieu' => 'Hình ảnh',

        // sản phẩm
        'name_sp'=>'Tên sản phẩm',
        'id_nhomsp'=>'Nhóm sản phẩm',
        'id_loaisp'=>'Loại sản phẩm',
        'price_sp'=>'Giá sản phẩm',
        'id_thuonghieu'=>'Thương hiệu sản phẩm',
        'motangan_sp'=>'Mô tả ngắn sản phẩm',
        'motadai_sp'=>'Mô tả dài sản phẩm',
        'img_sp'=>'Hình ảnh sản phẩm',

        // Nhóm sản phẩm
        'name_nhomsp'=>'Tên nhóm sản phẩm',
        'icon_nhomsp'=>'Biểu tượng',

        // loại sản phẩm
        'name_loaisp' => 'Tên loại sản phẩm',
        'icon_loaisp'=>'Biểu tượng',

        // đơn vị
        'name_donvi'=>'Tên đơn vị',

        // mã giảm giá
        'counpon_code'=>'Mã giảm giá',


    ],

];
