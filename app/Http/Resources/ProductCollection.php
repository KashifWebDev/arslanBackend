<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "category" => CategoryCollection::collection($this->whenLoaded('categories')),
            "brand" => $this->brand->name,
            "user" => new UserCollerction($this->user),
            "desc" => $this->desc,
            "price" => $this->price,
            "thumbnail" => $this->thumbnail
        ];
    }
}
