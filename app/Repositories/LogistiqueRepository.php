<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:50
 */

namespace App\Repositories;


use App\Logistique;

class LogistiqueRepository extends  RessourceRepository{
    public function __construct(Logistique $logistique){
        $this->model = $logistique;
    }
}