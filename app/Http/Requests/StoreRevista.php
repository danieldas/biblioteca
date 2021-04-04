<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRevista extends FormRequest
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
            'edicion' => 'required|min:12|max:30',
            'editorial' => 'required|min:2|max:30',
            'procedencia' =>  'required',

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
