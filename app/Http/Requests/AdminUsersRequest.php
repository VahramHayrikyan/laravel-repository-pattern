<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $id = (int) $this->route('user');
        if ($this->method() == 'POST')
        {
            return [
                'username'=>'required|unique:user,username|min:4|max:36|string',
                'email'=>'required|unique:user,email|email|min:6|max:26',
                'password'=>'required|min:6|max:26|string',
                'points'=>'nullable',
                'credit'=>'nullable',
                'phone'=>'nullable|regex:/^[0-9\-\(\)\/\+\s]*$/',
                'role'=>'required',
                'trusted_customer'=>'nullable',
            ];
        }else{
            return [
                'username'=>"required|unique:user,username,$id|min:4|max:36|string",
                'email'=>"required|unique:user,email,$id|email|min:6|max:26",
                'points'=>'nullable',
                'credit'=>'nullable',
                'phone'=>'nullable|regex:/^[0-9\-\(\)\/\+\s]*$/',
                'role'=>'required',
                'trusted_customer'=>'nullable',
            ];
        }

    }
}
