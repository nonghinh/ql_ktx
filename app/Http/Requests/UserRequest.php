<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|min:5|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'same:password',
        ];
    }

    public function messages(){
        return [
            'username.required' => 'Hãy nhập tên tài khoản',
            'username.min' => 'Tên tài khoản quá ngắn',
            'username.name' => 'Tên tài khoản đã tồn tại',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email sai định dạng',
            'email.unique' => 'Email đã được dùng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu quá ngắn',
            'confirm_password.same' => 'Bạn chưa xác nhận đúng mật khẩu',
        ];
    }
}
