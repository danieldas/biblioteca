<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTesis extends FormRequest
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
            'categoria' => 'required',
            'tutor' => 'required|min:8|max:70',
            'revisor' =>  'required|min:8|max:70',

            'titulo' => 'required|min:2|max:50',
            'anio_publicacion' => 'required|numeric|min:1990|max:2050',
            'nro_paginas' =>  'required|numeric|min:10|max:1000',
            'forma' => 'required',
            'idioma' => 'required',
            'url' => 'required|url',
            'observacion' => 'nullable|max:200',
            'condicion' => 'required',
            'isbn' => 'required|min:5|max:50',
            'descripcion' => 'nullable|max:200',
            'catalogo' => 'required|min:5|max:50',
        ];
    }
}
