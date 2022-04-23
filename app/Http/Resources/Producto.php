<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Producto extends JsonResource
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
            'id' => $this->id,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'descripcion' => $this->descripcion,
            'imagen' => $this->imagen,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'delete_at' => $this->delete_at,
        ];
    }
}
