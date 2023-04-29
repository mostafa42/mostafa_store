<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class Edit extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "image" => "sometimes",
            "name_ar" => "required" ,
            "name_en" => "required" ,
            "slug_ar" => "required" ,
            "slug_en" => "required" ,
            "desc_ar" => "required" ,
            "desc_en" => "required" ,
        ];
    }

    public function messages()
    {
        return [
            "name_ar.required" => "name in arabic is required" ,

            "name_en.required" => "name in english is required" ,

            "slug_ar.required" => "slug in arabic is required" ,

            "slug_en.required" => "slug in arabic is required" ,
            
            "desc_ar.required" => "description in arabic is required" ,
            
            "desc_en.required" => "description in arabic is required" ,
        ];
    }
}
