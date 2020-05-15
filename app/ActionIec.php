<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionIec extends Model
{
    protected $fillable = [
        'libelle','commentaire','image','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
