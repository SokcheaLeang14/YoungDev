<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
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
            'isbn' => $this->isbn,
            'title' => $this->title,
            'author' => AuthorResource::make($this->authors),
            'category' => CategoriesResource::make($this->categories),
            'description' => $this->description,
            'image' => 'images/' . $this->image,
            'status' => $this->status,
            'release_date' => $this->release_date,
            'location' => $this->location
        ];
    }
}
