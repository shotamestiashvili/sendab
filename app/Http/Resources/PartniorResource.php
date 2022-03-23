<?php

namespace App\Http\Resources;

use App\Models\Offer;
use Illuminate\Http\Resources\Json\JsonResource;

class PartniorResource extends JsonResource
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
            'offer_id' => Offer::where('user_id', $this->user_id)->value('id'),
            'user_id' => $this->user_id,
            'status' =>$this->status,
            'sendab_offer' =>$this->sendab_offer,

            'source'  => $this->routes->map(function($routes){
                return $routes;
            }),
            'route1'  => $this->routes->map(function($routes){
                return $routes->route1;
            }),
            'route2' => $this->routes->map(function($routes){
                return $routes->route2;
            }),
            'route3' => $this->routes->map(function($routes){
                return $routes->route3;
            }),
            'route4' => $this->routes->map(function($routes){
                return $routes->route4;
            }),
            'route5' => $this->routes->map(function($routes){
                return $routes->route5;
            }),
            'route6' => $this->routes->map(function($routes){
                return $routes->route6;
            }),
            'destination' => $this->routes->map(function($routes){
                return $routes->destination;
            }),
//
            'airplane'=>$this->transports->map(function($airplane){
                return $airplane->airplane;
            }),
            'car'=>$this->transports->map(function($car){
                return $car->car;
            }),
            'minibus'=>$this->transports->map(function($minibus){
                return $minibus->minibus;
            }),
            'railway'=>$this->transports->map(function($railway){
                return $railway->railway;
            }),
            'other'=>$this->transports->map(function($other){
                return $other->other;
            }),
//
            'item1' =>$this->parcels->map(function($item1){
                return $item1->item1;
            }),
            'item2'=> $this->parcels->map(function($item2){
                return $item2->item2;
            }),
            'item3'=> $this->parcels->map(function($item3){
                return $item3->item3;
            }),
            'item4'=> $this->parcels->map(function($item4){
                return $item4->item4;
            }),
            'item5'=> $this->parcels->map(function($item5){
                return $item5->item5;
            }),
            'item6'=> $this->parcels->map(function($item6){
                return $item6->item6;
            }),
            'item7'=> $this->parcels->map(function($item7){
                return $item7->item7;
            }),
            'item8'=> $this->parcels->map(function($item8){
                return $item8->item8;
            }),
            'weight' =>$this->parcels->map(function($weight){
                return $weight->weight;
            }),
            'length'=>$this->parcels->map(function($length){
                return $length->length;
            }),
            'height'=>$this->parcels->map(function($height){
                return $height->height;
            }),
            'width'=>$this->parcels->map(function($width){
                return $width->width;
            }),

            'store' =>$this->pickupTypes->map(function($store){
                return $store->store;
            }),
            'hand '=>$this->pickupTypes->map(function($hand){
                return $hand->hand;
            }),

            'price_kg' => $this->partniorPrices->map(function($price_kg){
                return $price_kg->price_kg;
            }),
            'price_sum' =>$this->partniorPrices->map(function($price_sum){
                return $price_sum->price_sum;
            }),

            'reoffer' => $this->reoffers->map(function($reoffer){
                return $reoffer->reoffer;
            }),

        ];
    }
}