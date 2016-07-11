<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request
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
            'LoEmail' => 'required|email',
            'LoPass'  =>  'required'
        ];
    }

    public  function messages()
    {
        return  [
            'LoEmail.required' => 'Chưa nhập email',
            'LoEmail.email' => 'Không đúng định dạng email',
            'LoPass.required' => 'Chưa nhập mật khẩu',
        ];
    }
}
