<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Helpers\Helper;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'contact1' => 'required',
            'contact2' => 'required',
            'photo' => 'required',
            'agence_id' => 'required'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        //send error message
        Helper::sendError('validation error',$validator->errors());
         
         
    }
}
