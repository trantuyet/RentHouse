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
            'current-password'=> "required | min:4",
            'new-password'=>"required |min:4",
            'new-password-confirm'=>"required|min:4",
        ];
    }
    public function messages(): array
    {
        return [
            'current-password.required'=>'Mat khau nay khong duoc de trong',
            'current-password.min'=>'Mat khau khong duoc ngan qua 4 ky tu',
            'new-password.required'=>'Mat khau nay khong duoc de trong',
            'new-password.min'=>'Mat kahu nay khong duoc ngan qua 4 ky tu',
            'new-password-confirm.required'=>'Mat khau nay khong duoc de trong',
            'new-password-confirm.min'=>'Mat khau nay khong duoc ngan qua 4 ky tu',
        ];
    }
}
