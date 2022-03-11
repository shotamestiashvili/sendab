<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order' => $this->order,
            'user_id'=> $this->user_id,
            'offer_id'=> $this->offer_id,
            'amount'=> $this->amount,
            'status'=> $this->status,
            'pickup_type'=>  $this->pickups[0]['pickup_type'],
            'source_city'=> $this->pickups[0]['source_city'],
            'source_address1'=>  $this->pickups[0]['source_address1'],
            'source_address2'=>  $this->pickups[0]['source_address2'],
            'firstname'=> $this->people[0]['firstname'],
            'lastname'=> $this->people[0]['lastname'],
            'phone'=> $this->people[0]['phone'],
            'email'=> $this->people[0]['email'],
            'company_name'=> $this->people[0]['company_name'],
            'country'=> $this->people[0]['country'],
            'city'=> $this->people[0]['city'],
            'address1'=> $this->people[0]['address1'],
            'address2'=> $this->people[0]['address2'],
            'postal'=>$this->people[0]['postal'],
            'comment'=>$this->people[0]['comment'],
            'order_value'=> $this->insuarance[0]['order_value'],
            'content'=>$this->insuarance[0]['content'],
            'term'=> $this->terms[0]['term'],
        ];
    }
}
