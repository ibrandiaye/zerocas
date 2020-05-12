<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:51
 */

namespace App\Repositories;


use App\ActionIec;

class ActionIecRepository extends RessourceRepository{
    public function __construct(ActionIec $actionIec){
        $this->model = $actionIec;
    }

}