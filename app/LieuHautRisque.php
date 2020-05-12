<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LieuHautRisque extends Model
{
    protected $fillable = [
        'lieu','situation', 'commentaire','image','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
