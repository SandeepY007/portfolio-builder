<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'project_name'=>'required',
            'language'=>'required',
            'framework'=>'required',
            'project_url'=>'required',
            'project_reference'=>'required'
        ];
    }
}
