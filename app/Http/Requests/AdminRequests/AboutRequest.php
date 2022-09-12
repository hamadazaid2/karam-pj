<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'head' => 'required | max:100',
            'paragraph' => 'required | min: 10',
        ];
    }
    public function messages()
    {
        return [
            'head.required' => 'Head Is Required',
            'paragraph.required' => 'Paragraph Is Required',
            'head.max' => 'Head charachters must be less than 100 characters',
            'paragraph.min' => 'Paragraph charachters must be more than 10 characters',
        ];
    }
}
