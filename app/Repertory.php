<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repertory extends Model
{
    protected $table = "Repertory";
    protected $fillable = [
        "name",
        "style",
    ];
}
