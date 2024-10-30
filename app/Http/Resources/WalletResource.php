<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
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
            'user' =>  UserResource::make($this->whenLoaded('user')),
            'currency' =>  CurrencyResource::make($this->whenLoaded('currency')),
            'balance' => $this->balance
        ];
    }
}
