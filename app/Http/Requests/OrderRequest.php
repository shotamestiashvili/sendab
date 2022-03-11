<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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

            'offer_id'=>'required|integer',
            'amount' => 'required|integer',
            'status'=>'required|boolean',
            'pickup_type'=> 'required|string|max:255',
            'source_city'=>'required|string|max:255',
            'source_address1'=>  'required|string|max:255',
            'source_address2'=> 'required|string|max:255',
            'firstname'=>'required|string|max:255',
            'lastname'=> 'required|string|max:255',
            'phone'=>  'required|integer',
            'email'=>  'required|email|max:40',
            'company_name'=> 'required|string|max:255',
            'country'=>'required|string|max:255',
            'city'=>'required|string|max:255',
            'address1'=>'required|string|max:255',
            'address2'=>'required|string|max:255',
            'postal'=>'required|integer',
            'comment'=>'required|string|max:255',
            'order_value'=>  'required|integer',
            'content'=>'required|string|max:255',
            'term'=>'required|boolean|max:255',
        ];
    }
}
