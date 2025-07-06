<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'lastname' => 'required|min:2|max:50',
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required|min:6|max:100',
            'phone' => 'required|min:10|max:10',
            'phone_format' => 'required|min:14|max:14',
            'birthdate' => 'required|date|before:-18 years',
            'salary' => 'required',
            'age' => 'required|before:-18',
            'gender' => 'required',
            'marital_status' => 'required',
            'langs' => 'required',
            'start' => 'required|date|after:now',
            'finish' => 'required|date|after:start',
            'address' => 'required:min:20:max:255',
            'image' => 'image|required|max:1024|mimes:jpg,jpeg,png',
            'declaretion' => 'required|min:20|max:1000',
        ];
    }
}
