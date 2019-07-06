<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "cat_id", "title", "author", "content", "image", "description"];
}
