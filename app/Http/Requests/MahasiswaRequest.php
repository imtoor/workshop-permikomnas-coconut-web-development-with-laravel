<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_lengkap'      => 'required|max:75',
            'nim'               => 'required|min:12|max:12',
            'no_telepon'        => 'required|min:8|max:14',
            'alamat'            => 'required|max:100',
            'jurusan'           => 'required|min:5|max:25',
            'agama'             => 'required',
            'email'             => 'required|email',
            'tgl_lahir'         => 'required|date',
            'jenis_kelamin'     => 'required',
            'semester'          => 'required|min:1|max:1'  
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Nama tidak boleh kosong',
            'nim.min'               => 'NIM minimal 12 digit',
            'nim.max'               => 'NIM maksimal 12 digit',
            'no_telepon.max'        => 'No.Telepon maksimal 14 digit',
            'email.email'           => 'Format email tidak valid!'
        ];
    }
}
