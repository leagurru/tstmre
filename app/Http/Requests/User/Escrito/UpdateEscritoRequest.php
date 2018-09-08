<?php

namespace App\Http\Requests\User\Escrito;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEscritoRequest extends FormRequest
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
            'user_id'      => 'required|integer',
            'organismo_id' => 'required|integer',
            'fecha'        => 'required|date|after:yesterday|before_or_equal:tomorrow',
            'causaNumero'  => 'required|integer',
            'causaAnio'    => 'required|integer',
            'caratula'     => 'required',

        ];
    }
}
