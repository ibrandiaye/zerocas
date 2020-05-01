<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'nom','region_id'
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function communes(){
        return $this->hasMany(Commune::class);
    }
}
