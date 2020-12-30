<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return true;
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=> ['required','max:225', 'min:3', 'string'/* 'not_regex:[\s\d]'*/],
            'middle_name'=> ['max:225', 'min:2', 'string' /*'not_regex:[\s\d]'*/],
            'last_name'=> ['required', 'max:255', 'min:3', 'string'/*'not_regex:[\s\d]'*/],
            'blood_group'=> ['required', 'numeric'],
            'mother_tongue'=> ['required', 'numeric'/*"not_regex:[\s\d]"*/],
            'address'=> ['required', /*"regex:/[01]/"*/],
            'dob'=> ['date', 'date_format:Y-m-d', 'before:9 years ago']
        ];
    }
}
