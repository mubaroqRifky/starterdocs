<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WBSRequest extends FormRequest
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
            // "wbs_nama" => 'required',
            // "wbs_stat" => 'required',
            // "karyawan" => 'required',
            // "wbs_nik" => 'required',
            // "wbs_ktpid" => 'required',
            // "wbs_alamat" => 'required',
            // "wbs_nohp" => 'required',
            // "wbs_typcmpl" => 'required',
            // "wbs_txtcmpl" => 'required',
            // "wbs_nama_terlapor" => 'required',
            // "wbs_divisi_terlapor" => 'required',
            // "wbs_lokasi_terlapor" => 'required',
            // "wbs_tanggal_kejadian" => 'required',
        ];
    }
}
