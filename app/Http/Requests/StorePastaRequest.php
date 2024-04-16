<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePastaRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'nullable|max:5000',
            'type' => 'required|max:80',
            'src' => 'nullable|max:1000',
            'cooking_time' => 'required|max:10',
            'weight' => 'required|max:10'
        ];
    }



    public function messages(): array {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => "Il titolo deve avere massimo :max caratteri",
            'type.max' => "La tipologia deve avere massimo :max caratteri",
            'type.required' => 'La tipologia deve essere inserita',
            'src.max' => "Inserisci un indirizzo di massimo :max caratteri",
            'cooking_time.required' => "Il tempo di cottura deve essere inserito",
            'cooking_time.max' => "Inserisci un tempo di cottura di massimo :max caratteri",
            'weight.required' => "Il peso deve essere inserito",
            'weight.max' => "Inserisci un peso di massimo :max caratteri",
        ];
    }
}
