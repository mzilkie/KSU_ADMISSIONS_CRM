<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationSheetRequest extends FormRequest
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
            //
            'firstName' => 'required',
            'lastName' => 'required',
            'streetAddress' => 'required',
            'streetAddress2' => '',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|min:6|max:6',
            'country' => 'required',
            'sex' => 'required',
            'birthday' => 'required|date',
            'email' => 'required|email',
            ''
        ];
    }
}
