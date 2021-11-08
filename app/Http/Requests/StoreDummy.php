<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDummy extends FormRequest
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
            'lorem' => 'required|string|max:50',
            'ipsum' => 'required|string|max:100',
        ];
    }

    public function messages()
    {
        return [
            'lorem.required' => 'A lorem is required',
            'ipsum.required'  => 'An ipsum is required',
        ];
    }
}
