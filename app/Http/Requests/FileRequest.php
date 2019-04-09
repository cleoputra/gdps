<?php

namespace App\Http\Requests;

use Illuminate\Auth\AuthManager;
use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // dd($this->route('file')->name_id);
        return $this->auth->check();
        // return $this->route('file')->name_id === $this->auth->user()->id;
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
        ];
    }
}
