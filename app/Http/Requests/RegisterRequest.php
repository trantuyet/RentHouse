<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
              return [
                  'name'=> "required",
                  'email' => "required|email",
                  'password'=> "required|min:4",
                  'password-confirm'=> "required|min:4|confirmed",
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Ten nay khong duoc de trong',
            'email.required'=>'Email nay khong duoc de trong',
            'password.required'=>'Mat khau nay khong duoc de trong',
            'password.min'=>'Mat khau nay khong duoc de trong',
            'email.email'=>'Khong dung dinh danng',
        ];
    }
}
