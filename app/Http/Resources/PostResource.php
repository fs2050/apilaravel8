<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'titulo' => $this->title,
            'conteudo' => $this->content,
            'fabio Salles' => "Fabio Salles",
            'created_at' => $this->created->format('d/m/y')

        ];
    }
}