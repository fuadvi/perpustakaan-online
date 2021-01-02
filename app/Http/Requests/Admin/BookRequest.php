<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'id_kategoris' => 'required|integer|exists:kategoris,id',
            'slug' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'konten_digital' => 'required|max:255',
            // 'status' => 'required|max:255',
            'materi' => 'required|mimes:word,txt,pdf|max:2048',
        ];
    }
}
