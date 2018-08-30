<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VeiculoFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'chassi' => 'required|unique:veiculos',
            'placa' => 'required|unique:veiculos',
            //'id_rastreador' => 'required|unique:veiculos',
            'ano_fabricacao' => 'required|min:4|max:4'
        ];
    }

}
