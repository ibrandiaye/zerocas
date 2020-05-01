<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable = [
        'nom','departement_id'
    ];
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
