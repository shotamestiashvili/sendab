<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartniorRequest extends FormRequest
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

            'status' =>  'required|string',
            'sendab_offer' =>'required|boolean',

            'source'  => 'required|string|max:255',
            'destination' => 'required|string|max:255',

            'airplane'=>'required|boolean',
            'car'=> 'required|boolean',
            'minibus'=>'required|boolean',
            'railway'=>'required|boolean',

            'item1' => 'required|string|max:255',

            'weight' =>'required|integer',
            'length'=>'required|integer',
            'height'=>'required|integer',
            'width'=>'required|integer',

            'store' =>'required|boolean',
            'hand'  => 'required|boolean',

            'price_kg' =>'required|integer',
            'price_sum' =>'required|integer',

            'reoffer'=>'required|boolean',
        ];
    }
}
