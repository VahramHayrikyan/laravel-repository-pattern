<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'bail|required|string',
            'phone'=>'bail|required',
            'address'=>'bail|required',
            'city'=>'bail|required',
            'region'=>'bail|required',
            'country_code'=>'bail|required',
            'zip_code'=>'bail|required',
            'date_of_birth'=>'bail|required|date',
            'country_code_code'=>'bail|required',
        ];
    }
}
