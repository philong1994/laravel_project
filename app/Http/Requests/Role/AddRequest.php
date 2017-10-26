<?php

namespace App\Http\Requests\Role;

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
            'txtName' => 'required|unique:role,name',
            'chkRole' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtName.required' => 'Please Enter Role Name',
            'txtName.unique'   => 'Role Name Is Exist.Please Enter Name Another',
            'chkRole.required' => 'Please Select At Least One Role',
        ];
    }
}
