<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PBBRequest extends FormRequest
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
            "status_aktiva" => 'required',
            "alamat_penagihan" => 'required',
            "alamat_pengiriman" => 'required',
            "budget_number" => 'required',
            "budget_status" => 'required',
            "email" => 'required|email',
            "kategori" => 'required',
            "name" => 'required',
            "nik" => 'required',
            "tanggal_dibutuhkan" => 'required|date',
            "tipe_pengadaan" => 'required',
        ];
    }
}
