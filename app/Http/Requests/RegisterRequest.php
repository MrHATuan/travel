<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'email' => 'required|email',
            'name' => 'required|min:3',
            'password'  =>  'required|min:6',
            'password_confirmation' => 'same:password',
        ];
    }

    public  function messages()
    {
        return  [
            'email.required' => 'Chưa nhập email',
            'email.email' => 'Không đúng định dạng email',
            'name.required' => 'Chưa nhập Họ Tên',
            'name.min' => 'Họ Tên phải từ 3 ký từ',
            'password.required' => 'Chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải từ 6 ký tự',
            'password_confirmation.same' => 'Mật khẩu xác nhận không đúng',
        ];
    }
}
