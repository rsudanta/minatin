<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoalRequest extends FormRequest
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
            'soal' => 'required',
            'opsi_1'=>'required',
            'opsi_2'=>'required',
            'opsi_3'=>'required',
            'opsi_4'=> 'required',        ];
    }
}
