<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ 'body', 'image', 'upVotes', 'downVotes', 'category_id', 'created_by_user'];
}
