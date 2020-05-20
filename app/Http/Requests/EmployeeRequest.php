<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name'=>'required',
            'role'=>'required',
            'image'=>'required',
            'ngo_id'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'nrc'=>'required',
            'age'=>'required',
            'nationality'=>'required',
            'qualification'=>'required',
            'experience'=>'required'
        ];
    }
}
