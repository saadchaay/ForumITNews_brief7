<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [ 'body', 'post_id', 'user_id', 'reply_to' ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function replies()
    {
        $replies = $this->hasMany(Comment::class, 'reply_to');
        if(empty($replies)){
            return false;
        } else {
            return $replies;
        }
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'reply_to');
    }
}
