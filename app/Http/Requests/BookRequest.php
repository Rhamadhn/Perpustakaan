<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'year' => ['required', 'integer', 'min:1000', 'max:' . date('Y')],
            'author' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul buku wajib diisi.',
            'title.string' => 'Judul buku harus berupa teks.',
            'title.max' => 'Judul buku maksimal 255 karakter.',

            'year.required' => 'Tahun terbit wajib diisi.',
            'year.integer' => 'Tahun terbit harus berupa angka.',
            'year.max' => 'Tahun terbit tidak boleh melebihi tahun sekarang.',

            'author.required' => 'Nama penulis wajib diisi.',
            'author.string' => 'Nama penulis harus berupa teks.',
            'author.max' => 'Nama penulis maksimal 255 karakter.',

            'description.required' => 'Deskripsi buku wajib diisi.',
            'description.string' => 'Deskripsi buku harus berupa teks.',
        ];
    }
}
