<?php

namespace App\Http\Requests\Manufacturer;

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
            'txtName'  => 'required|unique:manufacturer,name',
            'txtImage' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtName.required'  => 'Please Enter Manufacturer Name',
            'txtName.unique'    => 'Name Is Exist.Please Enter Name Another',
            'txtImage.required' => 'Please Enter Logo Manufacturer'
        ];
    }
}
