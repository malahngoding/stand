<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required|min:10',
            'photo' => 'required',
            'date_of_birth' => 'required',
            'interest_area' => 'required',
            'bio' => 'required|unique:posts|max:500',
        ];
    }
}
