<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:51
 */

namespace App\Repositories;


use App\LieuHautRisque;

class LieuHautRisqueRepository extends  RessourceRepository{
    public function __construct(LieuHautRisque $lieuHautRisque){
        $this->model = $lieuHautRisque;
    }
}