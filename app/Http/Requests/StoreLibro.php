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
            'editorial' => 'required|min:2|max:100',
            'edicion' => 'required',
            'procedencia' =>  'required',
            'costo' =>  'required|digits_between:2.0,1000.0',
        ];
    }
}