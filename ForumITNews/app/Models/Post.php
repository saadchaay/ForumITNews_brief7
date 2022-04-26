<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ 'body', 'image', 'upVotes', 'downVotes', 'category_id', 'created_by_user'];

    public function category()
    {
        $cat = $this->belongsTo(Category::class);
        return $cat;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user');
    }
}
