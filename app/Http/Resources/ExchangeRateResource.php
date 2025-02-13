<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExchangeRateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'from_currency' =>  CurrencyResource::make($this->whenLoaded('fromCurrency')),
            'to_currency' =>  CurrencyResource::make($this->whenLoaded('toCurrency')),
            'rate' => $this->rate
        ];
    }
}