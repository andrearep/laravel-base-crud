<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = "comic";
    protected $fillable = ['title', 'description', 'cover', 'price', 'released_date'];
}