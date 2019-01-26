<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotographerRequest extends FormRequest
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
            'name' => 'required|min:1|max:255', 
            'idcard' => 'required|max:13', 
            'birthday'  => 'required', 
            'sex'  => 'required', 
            'address' => 'required', 
            'sub_district' => 'required', 
            'district' => 'required', 
            'province' => 'required', 
            'zipcode' => 'required', 
            'phone' => 'required|max:10',
            'id_user' => 'required'

        ];
    }
}
