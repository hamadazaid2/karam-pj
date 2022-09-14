<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerOpinionRequest extends FormRequest
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
            'customerPhoto' => 'required',
            'name' => 'required | max:50',
            'jobTitle' => 'required | max:50',
            'opinion' => 'required | min: 10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name Is Required',
            'job_title.required' => 'Job Title Is Required',
            'customerPhoto.required' => 'Image Is Required',
            'opinion.required' => 'Opinion Is Required',
            'name.max' => 'Name charachters must be less than 50 characters',
            'job_title.max' => 'Job Title charachters must be less than 50 characters',
            'opinion.min' => 'Opinion charachters must be more than 10 characters',
        ];
    }
}
