<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'txtName'     => 'required',
            'sltPosition' => 'required',
            'txtLink'     => 'required',
            'txtImage'    => 'required',
            'txtAlt'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'txtName.required'     => 'Please Enter Banner Name',
            'txtName.unique'       => 'Banner Name Exist.Please Enter Banner Name Another',
            'sltPosition.required' => 'Please Select Position Banner',
            'txtLink.required'     => 'Please Enter Link Banner',
            'txtImage.required'    => 'Please Choose A Image',
            'txtAlt.required'      => 'Please Enter Alt Tag Image',
        ];
    }
}
