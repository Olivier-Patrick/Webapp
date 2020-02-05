<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'Titre' => 'required',
            'category_id' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Etat' => 'required',
            'Adresse' => 'required',
            'Phone' => 'required',
            'Ville' => 'required', 
            
        ];


        $photos = count(array($this->input('photos')));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }


        return $rules ;
    }
}
