<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'title'=>'required',
            'event_image'=>'required',
            'event_mobile_image'=>'required',
            'venue'=>'required',
            'details'=>'required',
            'date'=>'required',
            'total_person_in_event'=>'required',
            'vip_guest_name'=>'required'
        ];
    }
}
