<?php

namespace App\Http\Requests;

class ChangePasswordRequest extends BaseRequest
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
    public function rules() : array
    {
        return [
            'password_old' => 'required',
            'password' => 'required',
            'password_comfirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password_old.required' => 'Trường này không được để trống!',
            'password.required' => 'Trường này không được để trống!',
            'password_comfirm.required' => 'Trường này không được để trống!',
            'password_comfirm.same' => 'Mật khẩu nhập không khớp!',
        ];
    }
}
