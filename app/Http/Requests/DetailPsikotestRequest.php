<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailPsikotestRequest extends FormRequest
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
            'judul' => 'required',
            'user_id'=>'required|integer|exists:users,id',
            'deskripsi_psikotest'=> 'required',
            'harga'=> 'required |integer|min:0',
            'jumlah_soal'=> 'required|integer|min:0',   
        ];
    }

}
