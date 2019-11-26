<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'price' => 'required',
            'name' => 'required',
            'category' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'price.required' => 'Polje cena je obavezno.',
          'name.required' => 'Polje ime je obavezno.',
          'category.required' => 'Polje kategorija je obavezno.',
        ];
    }
}
