<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
        $rules = [
            'name_album' => 'required',
        ];

        $photos = count($this->input('photos'));
        foreach($this->request->get('photos') as $key => $val) { 
            $rules['photos.'.$key] = 'required'; 
        } 

        return $rules;


        
    }
}
