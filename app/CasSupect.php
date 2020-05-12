<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasSupect extends Model
{
    protected $fillable = [
        'commentaire','image','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
