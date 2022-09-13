<?php

namespace App\Http\Requests\WebSiteRequests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsMessageRequest extends FormRequest
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
            'name' => 'required | max:50',
            'email'=>'required | email',
            'phone' => 'required | numeric',
            'message' => 'required | min: 10 | max: 300'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name Is Required',
            'email.required' => 'Email Is Required',
            'phone.required' => 'Phone Is Required',
            'message.required' => 'Message Is Required',
            'name.max' => 'Your Name Character Numbers Must Be Less Than 50',
            'email.email' => 'Email Should be on Email Format(example@example.com)',
            'phone.numeric' => 'Phone Must be Number',
            'message.min' => 'Your Name Character Numbers Must Be More Than 10',
            'message.max' => 'Your Name Character Numbers Must Be Less Than 300',
        ];
    }
}
