<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:45
 */

namespace App\Repositories;


use App\CasSupect;

class CasSuspectRepository extends RessourceRepository{
    public function __construct(CasSupect $casSupect){
        $this->model =$casSupect;
    }
}