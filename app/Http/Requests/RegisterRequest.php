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
                  'password'=> "required"
        ];
    }

    public function messages(): array
    {
        return [
            'name.require'=>'Truong nay khong duoc de trong',
            'email.require'=>'Truong nay khong duoc de trong',
            'password.require'=>'Truong nay khong duoc de trong',
            'email.email'=>'Khong dung dinh danng',
        ];
    }
}
