<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class SiteConfigRequest extends FormRequest
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
            'logo' => 'required',
            'address' => 'required | max:100',
            'email' => 'required | max:100 | email',
            'phone' => 'required | max:20',
            'linkedIn' => 'required | url',
            'instagram' => 'required | url',
            'twitter' => 'required | url',
            'facebook' => 'required | url',
            'appStore' => 'required | url',
            'googlePlay' => 'required | url',
        ];
    }
    public function messages()
    {
        return [
            'logo.required' => 'Logo is required',
            'address.required' => 'Address is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'linkedIn.required' => 'Linked In URL is required',
            'instagram.required' => 'Instagram URL is required',
            'twitter.required' => 'Twitter URL is required',
            'facebook.required' => 'Facebook URL is required',
            'appStore.required' => 'App Store URL is required',
            'googlePlay.required' => 'Google Play URL is required',

            'email.email' => 'Email should be like Email Format(example@examole.com)',

            'email.max' => 'Email length should be less than 100',
            'phone.max' => 'Phone length should be less than 20',

            'linkedIn.url' => 'Linked In should be in URL format(www.example.com)',
            'instagram.url' => 'Instagram should be in URL format(www.example.com)',
            'twitter.url' => 'Twitter should be in URL format(www.example.com)',
            'facebook.url' => 'Facebook should be in URL format(www.example.com)',
            'appStore.url' => 'App Store should be in URL format(www.example.com)',
            'googlePlay.url' => 'Google Play should be in URL format(www.example.com)',
        ];
    }
}
