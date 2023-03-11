<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LP2KPKRequest extends FormRequest
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
            // "no_request" => 'required',
            // "status_request" => 'required',
            "tanggal" => 'required',
            "pbb_reff" => 'required',
            "nik" => 'required',
            "name" => 'required',
            "email" => 'required',
            "kategori" => 'required',
            "divisi" => 'required',
            "department" => 'required',
            "divisi" => 'required',
            "lokasi" => 'required',
            "pembelian" => 'required',
            "status_pembelian" => 'required',
            "kondisi" => 'required',
            "latar_belakang" => 'required',
            "jumlah" => 'required',
            // "file" => 'required',
            "user_support" => 'required',
        ];
    }
}
