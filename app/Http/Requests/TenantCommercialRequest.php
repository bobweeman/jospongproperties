<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantCommercialRequest extends FormRequest
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
            'company_name'=>'required|min:2',
            'contact_name'=>'required|min:2',

            'address'=>'required',
            'city_id'=>'required',
            'country_id'=>'required|numeric',
            'phone_number'=>'required',
            'company_number'=>'required',
            'fax_number'=>'required',
            'email'=>'required|email',
            'status'=>'required'
        ];
    }
}
