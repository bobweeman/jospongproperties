<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhysicalRequest extends FormRequest
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
//            'fenced'=>'required',
//            'gated'=>'required',
//            'occupier'=>'required',
//            'encroach'=>'required',
            'building_id'=>'required|numeric',
        ];
    }
}
