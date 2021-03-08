<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //punya table = posts
    //id table = id
    //primary key = auto increment
    //primary key =integer
    use HasFactory;

    protected $table = "my_post";
    protected $primaryKey = "postId";
    protected $keyType = "string";
    protected $incrementing = false;
}
