<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'id'=> $this->id,
            'productId'=>$this->product_id,
            'transactionType'=>$this->transaction_type,
            'transactionDate'=>$this->transaction_date,
            'quantity'=>$this->quantity,
            'unitPrice'=>$this->unit_price
        ];
    }
}
