<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMatrimonialRequest extends FormRequest
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
            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'image'=>'required',
            'mobile_image'=>'required',
            'sequence'=>'required',
            'member_status'=>'required',
            'status'=>'required',
        ];
    }
}
