<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Node\Scalar\String_;

class PostsResource extends JsonResource
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
            'data' => [
                'id' => (string)$this->id,
                'type'=> 'Posts',
                'user'=> (string)$this->created_by_user,
                'category'=> (string)$this->category_id,
                'attributes' => [
                    'body' => $this->body,
                    'image' => $this->image,
                    'upVotes' => $this->upVotes,
                    'downVotes' => $this->downVotes,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
                ]
            ]
        ];
    }
}
