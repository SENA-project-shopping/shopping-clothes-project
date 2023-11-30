<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules() 
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'rol_users_id' => 'required',
        ];
    }
}