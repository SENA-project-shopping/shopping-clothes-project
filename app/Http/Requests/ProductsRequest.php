<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    public function rules() 
    {
        return [
            'nombre_producto' => 'required',
            'cantidad_producto' => 'required',
            'precio_producto' => 'required',
        ];
    }
}