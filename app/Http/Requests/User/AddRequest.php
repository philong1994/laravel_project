<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'txtEmail' => 'required|email|unique:users,email',
            'txtPass'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'txtEmail.required' => 'Please Enter Email Account',
            'txtEmail.email'    => 'This Is Not Email Or Email Format Not Correct',
            'txtEmail.unique'   => 'Email Is Exist.Please Enter Email Another',
            'txtPass.required'  => 'Please Enter Password'
        ];
    }
}
