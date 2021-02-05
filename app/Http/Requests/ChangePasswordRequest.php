<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'old_password'          => 'required',
            'new_password'              => 'required|min:6',
            'password_confirmation'=>'sometimes|required_with:new_password',
        ];
    }
    public function messages(): array
    {
        return [
            'old_password.required'=>'Mật khẩu này không được để trống',
            'new_password.required'=>'Mật khẩu này không được để trống',
            'new_password.min'=>'Mật khẩu ít nhất phải 6 ký tự',
        ];
    }
}
