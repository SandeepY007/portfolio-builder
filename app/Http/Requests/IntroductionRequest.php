<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntroductionRequest extends FormRequest
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
            'user_id'=>'exists:users,id',
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|max:10',
            'image'=>'mimes:jpg,jpeg,png,gif,svg|max:2048',
            'links' => 'required'
        ];
    }
}
