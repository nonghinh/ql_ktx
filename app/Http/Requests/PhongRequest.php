<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhongRequest extends FormRequest
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
            'room_nunber' => 'required|unique:phong,tenp',
            'house_id' => 'required',
        ];
    }

    public function messages(){
        return [
            'room_number.required' => 'Bạn chưa nhập số phòng',
            'room_number.unique' => 'Số phòng này đã có',
            'house_id.required' => 'Bạn chưa chọn dãy nhà'
        ]
    }
}
