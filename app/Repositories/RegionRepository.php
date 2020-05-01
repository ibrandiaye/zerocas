<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 27/04/2020
 * Time: 18:04
 */

namespace App\Repositories;


use App\Region;

class RegionRepository extends RessourceRepository{
    public function __construct(Region $region){
        $this->model = $region;
    }

}