<?php

namespace App\Http\Requests\News;

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
            'txtTitle'           => 'required',
            'chkCategory'        => 'required',
            'txtIntro'           => 'required',
            'txtImage'           => 'required',
            'txtAlt'             => 'required',
            'txtViewed'          => 'required|numeric',
            'txtSlug'            => 'required',
            'txtMetaTitle'       => 'required',
            'txtMetaKeywords'    => 'required',
            'txtMetaDescription' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required'           => 'Please Enter News Title',
            'txtIntro.required'           => 'Please Enter News Intro',
            'chkCategory.required'        => 'Please Select At Least One Category',
            'txtImage.required'           => 'Please Choose A Image',
            'txtAlt.required'             => 'Please Enter Alt Tag Image',
            'txtViewed.required'          => 'Please Enter Viewed',
            'txtViewed.numeric'           => 'Viewed Must Number',
            'txtSlug.required'            => 'Please Enter Slug URL (SEO)',
            'txtMetaTitle.required'       => 'Please Enter Meta Title Tag (SEO)',
            'txtMetaKeywords.required'    => 'Please Enter Meta Keywords Tag (SEO)',
            'txtMetaDescription.required' => 'Please Enter Meta Description Tag (SEO)'
        ];
    }
}
