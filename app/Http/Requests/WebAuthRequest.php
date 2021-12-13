<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebAuthRequest extends FormRequest
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
        if ($this->path() == 'login')
        {
            return [
                'email'=>'required|email|exists:user,email|min:6|max:26',
                'password'=>'required|min:6|max:20|string'
            ];
        }else{
            return [
                'username'=>'required|string|min:4|max:36',
                'email'=>'required|email|unique:user,email|min:6|max:26|confirmed',
                'password'=>'required|min:6|max:26|string|confirmed',
                'recruiter'=>'nullable|min:4|max:36|string|exists:user,username'
            ];
        }

    }
}
