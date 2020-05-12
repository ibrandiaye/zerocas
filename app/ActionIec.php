<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionIec extends Model
{
    protected $fillable = [
        'libelle','desciption','image','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
