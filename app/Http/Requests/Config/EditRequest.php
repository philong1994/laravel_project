<?php

namespace App\Http\Requests\Config;

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
            'txtNameSite'        => 'required',
            'txtSiteTitle'       => 'required',
            'txtMetaKeywords'    => 'required',
            'txtMetaDescription' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'txtNameSite.required'        => 'Please Enter Site Name',
            'txtSiteTitle.required'       => 'Please Enter Site Title',
            'txtMetaKeywords.required'    => 'Please Enter Meta Keywords',
            'txtMetaDescription.required' => 'Please Enter Meta Description'
        ];
    }
}
