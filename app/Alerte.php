<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    protected $fillable = [
        'telephone','description','image'
    ];
}
