<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            //
            'name'=>'required|min:2',
            'contact_name'=>'required|min:2',
            'phone'=>'required|min:2',
            'email'=>'required|email',
            'address'=>'required|min:2',
            'city_id'=>'required|numeric',
            'country_id'=>'required|numeric',
        ];
    }
}
