<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
            'name' => 'required|string',
            'nationality' => 'required|string',
            'born_date' =>  'required|string',
            'nik' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',

            //file
            'cv' => 'required|file|mimes:pdf|max:2048',
            'ktp' => 'required|image|max:2048',
        
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
}
