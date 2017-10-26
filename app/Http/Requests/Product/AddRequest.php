<?php

namespace App\Http\Requests\Product;

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
            'txtTitle'           => 'required|unique:product,name',
            'chkCategory'        => 'required',
            'sltManufacturer'    => 'required',
            'txtPriceImportDB'   => 'required|numeric',
            'txtPriceSaleDB'     => 'required|numeric',
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
            'txtTitle.required'           => 'Please Enter Product Name',
            'txtTitle.unique'             => 'Name Is Exist.Please Enter Name Another',
            'chkCategory.required'        => 'Please Select At Least One Category',
            'sltManufacturer.required'    => 'Please Select Manufacturer',
            'txtPriceImportDB.required'   => 'Please Enter Import Price',
            'txtPriceImportDB.numeric'    => 'Import Price Must Number',
            'txtPriceSaleDB.required'     => 'Please Enter Sale Price',
            'txtPriceSaleDB.numeric'      => 'Sale Price Must Number',
            'txtIntro.required'           => 'Please Enter Intro Post',
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
