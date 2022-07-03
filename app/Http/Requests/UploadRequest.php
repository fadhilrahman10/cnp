<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'cv' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
            'cv' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'ktp' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'ijazah' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'transkip_nilai' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'sertifikat' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'sertifikat_vaksin' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'foto' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'foto_full_body' => 'required|file|mimes:pdf,jpeg,png,jpg',
        ];
    }
}
