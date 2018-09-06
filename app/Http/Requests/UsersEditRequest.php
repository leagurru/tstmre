<?php

namespace App\Http\Requests;

use App\Modelos\Admin\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsersEditRequest extends FormRequest
{
    /**
     * UsersEditRequest constructor.
     */
    public function __construct()
    {
        $this->user = User::find(request()->route('user'));
    }


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
            'name'         => 'required',
            'organismo_id' => 'required',
//            'email'        => 'required|unique:users|email'
            'email' => [
                'required',
                 Rule::unique('users')->ignore($this->user->id),
                'email'
//                 Rule::unique('users')->ignore(request()->route('user')),
            ],


            ];
//            ,
//            'password'  => 'required'
//        ];
    }
}
