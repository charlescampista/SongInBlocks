<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = "Song";
    protected $fillable = [
        "name",
        "author",
        "style",
        "idblock"
    ];
}
