<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'nrc'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'description'=>'required',
            'role'=>'required',
            'health_center_id'=>'required'
        ];
    }
}
