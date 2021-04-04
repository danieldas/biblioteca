<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibro extends FormRequest
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
            'editorial' => 'required|min:15|max:100',
            'edicion' => 'required',
            'procedencia' =>  'required',
            'costo' =>  'required|numeric|min:2.0|max:1000.0',

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