<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
            'title' => 'required|max:60|min:10',
            'body' => 'required|min:30',
            'maxPrice' => 'regex:/^\d*(\.\d{1,2})?$/',
        ];
    }

    public function messages() {
      return [
        'title.min' => 'Minimalna ilość znaków w tytule wynosi 10 znaków.',
        'title.required' => 'Pole tytuł jest wymagane.',
        'title.max' => 'Maksymalna długość tytułu wynosi 60 znaków.',
        'body.required' => 'Pole treść jest wmagane.',
        'body.min' => 'Minimalna długość treści ogłoszenia wynosi 30 znaków.',
        'maxPrice.regex' => 'Niepoprawny format ceny. Liczbę groszy podajemy po kropce.',
      ];
    }
}
