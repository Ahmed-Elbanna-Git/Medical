<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class BranchRequest extends FormRequest
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
    public function rules($id = null)
    {   
        
        return [
          'name' => 'required|string|max:191',
          'address' => 'required|string|max:191',
          'lat' => 'required|string|max:191',
          'long' => 'required|string|max:191',
          'phone' => 'required|numeric|max:191'
          
         
        ];
    }

    public function messages(){
        return [
              'name.required'=>trans('validation.name.required'),
            'address.required'=>trans('validation.address.required'),
           
          
        ];
    }
}
