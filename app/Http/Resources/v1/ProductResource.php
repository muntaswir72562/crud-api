<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id'=>$this->id,
            'productName'=>$this->pName,
            'category'=>$this->category,
            'supplier'=>$this->supplier,
            'unitPrice'=>$this->unit_price,
            'stock'=>$this->stock,
        ];
    }
}
