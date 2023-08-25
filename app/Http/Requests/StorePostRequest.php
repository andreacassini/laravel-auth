<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'cover_image' => 'image|max:250'
        ];
    }

    public function messages()
    {
        return [
            'cover_image.image'  => 'Il file caricato deve essere un file immagine',
            'cover_image.max'  => 'Il nome del file deve essere lungo al massimo :max caratteri'
        ];
    }
}
