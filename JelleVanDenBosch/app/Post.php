<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'berichten';
    protected $fillable = ['titel','content'];
}
