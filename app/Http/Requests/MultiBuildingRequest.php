<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MultiBuildingRequest extends FormRequest
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
            'address'=>'required|min:2',
            'district_id'=>'required|numeric',
            'total_floor_area'=>'numeric',
            'city_id'=>'required|numeric',
            'country_id'=>'required|numeric',
            'purchase_price'=>'numeric',
            'property_tax'=>'numeric',
            'status'=>'required|min:2'
        ];
    }
}
