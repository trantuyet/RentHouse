<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddHouseRequest extends FormRequest
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
            'name' => 'required|min:6',
            'address' => 'required|min:6',
            'desc' => 'required|min:6',
            'pricePerDay' => 'required|numeric|min:100000',
//            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'name.min' => 'Tên dài tối thiểu 6 kí tự',
            'address.required' => 'Địa chỉ không được để trống!',
            'address.min' => 'Địa chỉ dài tối thiểu 6 kí tự',
            'desc.required' => 'Mô tả không được để trống',
            'pricePerDay.required' => 'Giá không được để trống',
            'pricePerDay.min' => 'Giá thấp nhất là 100.000 VNĐ',
            'desc.min' => 'Địa chỉ dài tối thiểu 30 kí tự',
//            'image.max' => 'Dung lượng ảnh tối đa là 10Mb',
//            'image.required'=>'Ảnh không được để trống'
        ];
    }
}
