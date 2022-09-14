<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class StepDivRequest extends FormRequest
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
            'img' => 'required',
            'header' => 'required | max:100',
            'paragraph' => 'required | min: 10',
        ];
    }
    public function messages()
    {
        return [
            'img.required' => 'Image Is Required',
            'header.required' => 'Head Is Required',
            'paragraph.required' => 'Paragraph Is Required',
            'header.max' => 'Head charachters must be less than 100 characters',
            'paragraph.min' => 'Paragraph charachters must be more than 10 characters',
        ];
    }
}
