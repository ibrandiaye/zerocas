<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 27/04/2020
 * Time: 18:06
 */

namespace App\Repositories;


use App\Departement;

class DepartementRepository extends  RessourceRepository{
    public function __construct(Departement $departement){
        $this->model = $departement;
    }
    public function getDepartements(){
        return Departement::with('region')
            ->get();
    }
}