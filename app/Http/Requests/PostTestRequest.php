<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostTestRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'int_check' => 'required',
            'str_check' => 'required',
            'int_input' => 'exclude_unless:int_check,true|required',
            'str_input' => 'exclude_unless:str_check,true|required',
        ];
    }
}
