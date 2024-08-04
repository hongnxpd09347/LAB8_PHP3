<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tenSP' => $this->tenSP,
            'moTa' => $this->moTa,
            'gia' => $this->gia,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

}
