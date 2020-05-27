<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:50
 */

namespace App\Repositories;


use App\Logistique;
use Illuminate\Support\Facades\DB;

class LogistiqueRepository extends  RessourceRepository{
    public function __construct(Logistique $logistique){
        $this->model = $logistique;
    }
    public function getLogistiqueByAsc($asc,$debut,$fin){
        return DB::table('logistiques')
            ->join('users','logistiques.user_id','=','users.id')
            ->where('users.asc',$asc)
            ->whereBetween('logistiques.created_at',[$debut,$fin])
            ->select('logistiques.*','users.*')
            ->get();

    }
}