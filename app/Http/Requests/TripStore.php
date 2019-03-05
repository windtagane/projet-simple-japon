<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripStore extends FormRequest
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
            'theme' => 'required|max:255|string',
            'title' => 'required||max:255|string',
            'description' => 'required|string',
            'favorite_place' => 'string',
            'travel_time' => 'string',
            'average_price' => 'integer',
            'transportation' => 'string',
            'published' => 'boolean'
        ];
    }
}
