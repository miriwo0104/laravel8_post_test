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
// 他のフィールドの値によってバリデーションの振る舞いを変える時、かつ、必須以外のバリデーションをつけるとき
//            'int_input' => 'null|required_if:int_check,true|string',
            'int_input' => 'required_if:int_check,false',
            'str_input' => 'required_if:str_check,true',
        ];
    }
}
