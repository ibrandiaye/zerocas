<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 21/05/2020
 * Time: 11:50
 */

namespace App\Repositories;


use App\Alerte;
use Illuminate\Support\Facades\DB;

class AlerteRepository extends RessourceRepository{

    public function __construct(Alerte $alerte){
        $this->model = $alerte;
    }
    public function getAlerteByAsc($asc,$debut,$fin){
        return DB::table('alertes')
            ->join('users','alertes.user_id','=','users.id')
            ->where('users.asc',$asc)
            ->whereBetween('alertes.created_at',[$debut,$fin])
            ->select('alertes.*','users.*')
            ->get();

    }
}