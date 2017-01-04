<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantRequest extends FormRequest
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
            'first_name'=>'required|min:2',
            'last_name'=>'required|min:2',

            'address'=>'required',
            'city_id'=>'required|numeric',
            'country_id'=>'required|numeric',
            'cell_phone'=>'required',
            'email'=>'required|email',
            'status'=>'required',
            'dob'=>'required|date'
        ];
    }
}
