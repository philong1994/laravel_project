<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'txtEmail' => 'required|email',
            'txtPass'  => 'required',
            'txtLock'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtEmail.required' => 'Email is required',
            'txtEmail.email'    => 'It does not email',
            'txtPass.required'  => 'Password is required',
            'txtLock.required'  => 'Lock is required'
        ];
    }
}
