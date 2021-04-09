<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaterial extends FormRequest
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
            'titulo' => 'required|min:15|max:50',
            'anio_publicasion' => 'required'|'date',
            'nro_paginas' =>  'required|numeric',
            'forma' => 'required',
            'tipo' => 'required',
            'idioma' => 'required|min:15|max:50',
            'url' => 'required|url',
            'observacion' => 'required|min:15|max:50',
            'condicion' => 'required',
            'isbn' => 'required|min:15|max:50',
            'disponibilidad' => 'required|min:15|max:50',
            'descripcion' => 'required|min:15|max:50',
            'catalogo' => 'required|min:15|max:50',
        ];
    }
}
