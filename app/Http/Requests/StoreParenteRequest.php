<?php

namespace App\Http\Requests;

use App\Enum\BloodEnum;
use App\Models\Parente;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreParenteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "firstname"=>'required|max:50' , 
        "lastname"=>'required|max:50' , 
        'dateofbirth' =>'required|date' , 
        'gender' =>['required' , Rule::in(['m' , 'f'])] , 
        'blood_type' =>['required' ,Rule::in( ['A+' , 'A-' , 'B+' , 'B-' , 'AB+' , 'AB-' , 'O+' , 'O-'])]  ,
        'address' =>'required|max:255' , 
        "phone" =>'required|max:10' ,
        "email" =>'required|email|unique:'.Parente::class , 
        "last_Login_date" =>'required|date'
        ];
    }
}
