<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = "Block";
    protected $fillable = [
        "name",
        "idsong",
    ];
}
