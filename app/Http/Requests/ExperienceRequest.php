<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'name'=>'required',
            'company_name'=>'required',
            'position'=>'required',
            'job_location'=>'required',
            'started_at'=>'required',
            'ends_at'=>'required',
            'pay'=>'required'
        ];
    }
}
