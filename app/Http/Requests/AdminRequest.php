<?php

namespace App\Http\Requests;

class AdminRequest extends BaseRequest
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
            'email' => 'required|unique:admins,email,'.$this->id,
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống!',
            'email.unique' => 'Email đã tồn tại!',

        ];
    }
}
