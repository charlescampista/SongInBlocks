<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicalNote extends Model
{
    protected $table = "MusicalNote";
    protected $fillable = [
        "note",
        "idblock",
    ];
}
