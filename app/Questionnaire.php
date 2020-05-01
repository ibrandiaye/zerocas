<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = [
        'commerce','maison','salon','multiservice','arret','boulangerie','marche','grandplace','savon','detergent',
        'intrusion','commune_id'
    ];
}
