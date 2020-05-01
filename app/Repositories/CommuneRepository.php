<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 27/04/2020
 * Time: 18:08
 */

namespace App\Repositories;


use App\Commune;

class CommuneRepository extends  RessourceRepository{
    public  function __construct(Commune $commune){
        $this->model = $commune;
    }
    public function getCommunes(){
        return Commune::with(['departement','departement.region'])
            ->get();
    }
}