<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function __constructor($method, $parameters)
    {
//        dd($this);
    }

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
            'name'         => 'required',
            'organismo_id' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->id,
            'password'     => 'required'
        ];
    }
}
