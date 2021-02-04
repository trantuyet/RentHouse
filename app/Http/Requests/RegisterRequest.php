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
                  'email' => "required|email|unique:users,email",
                  'password'=> "required|min:6|confirmed",
                  'password_confirmation'=>'sometimes|required_with:password',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Truong nay khong duoc de trong',
            'email.required'=>'Truong nay khong duoc de trong',
            'email.email'=>'Khong dung dinh danng',
            'password.required'=>'Truong nay khong duoc de trong',
            'password.min'=>'It nhat 6 ky tu tro len',

        ];
    }
}
