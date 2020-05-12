<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistique extends Model
{
    protected $fillable = [
        'type','situation','commentaire','image','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
