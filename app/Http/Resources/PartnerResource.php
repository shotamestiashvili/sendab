<?php

namespace App\Http\Resources;

use App\Nova\Customer;
use Illuminate\Http\Resources\Json\JsonResource;

class PartnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user_id' =>    $this->user_id,
            'plateNumer' => $this->plateNumer,
            'carModel' =>   $this->carModel,
            'sourceCity' => $this->sourceCity,
            'sourceTime' => $this->sourceTime,
            'sourceDate' => $this->sourceDate,
            'destinationDate1' => $this->destinationDate1,
            'destinationCity1' => $this->destinationCity1,
            'destinationTime1' => $this->destinationTime1,
            'airplane' => $this->airplaneChanger,
            'car' => $this->carChanger,
            'minibus' => $this->minibusChanger,
            'railway' =>  $this->railwayChanger,
            'anyParcel' =>  $this->anyParcel,
            'laptop' =>  $this->laptop,
            'smartphone' =>  $this->smartphone,
            'clothes' =>  $this->clothes,
            'oneKg' =>  $this->oneKg,
            'twoKg' =>  $this->twoKg,
            'fiveKg' =>  $this->fiveKg,
            'tenKg' =>  $this->tenKg,
            'twentyKg' =>  $this->twentyKg,
            'twentyKgPlus' =>  $this->twentyKgPlus,
            'length' => $this->length,
            'width' =>  $this->width,
            'height' =>  $this->height,
            'fromStore' =>  $this->fromStore,
            'byHand' =>  $this->byHand,
            'enteredKgPrice'=>  $this->enteredKgPrice,
            'enteredOrderPrice'=>  $this->enteredOrderPrice,
            'clientOffer'=> $this->clientOffer,
            'name' => \App\Models\Customer::where('user_id', $this->user_id)->value('firstname'),
            'lastname' => \App\Models\Customer::where('user_id', $this->user_id)->value('lastname'),

        ];
    }
}
