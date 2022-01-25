<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeladatRequest extends FormRequest
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
            'link' => 'required|min:8',
            'szoveges' => 'required|min:0|max:2000',
            'jegy' => 'required|numeric|min:0|max:5'
        ];
    }
}
