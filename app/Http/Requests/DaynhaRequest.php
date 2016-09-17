<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaynhaRequest extends FormRequest
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
            'housename' => 'required | unique:daynha,tennha',
        ];
    }

    public function messages(){
        return [
            'housename.required' => 'Bạn chưa nhập tên dãy nhà',
            'housename.unique' => 'Dãy nhà này đã có',
        ];
    }
}
