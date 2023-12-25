<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'title' => 'required',
            'venue' => 'required',
            'details' => 'required',
            'description' => 'required',
            'max_ticket_book' => 'required',
            'ticket_price' => 'required',
            'date' => 'required',
            'time' => 'required',
        ];
    }
}
