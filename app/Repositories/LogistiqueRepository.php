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
    public function getLogistiqueByAsc($asc,$debut,$fin,$commune_id){
       /* return DB::table('logistiques')
            ->join('users','logistiques.user_id','=','users.id')
            ->where('users.asc',$asc)
            ->whereBetween('logistiques.created_at',[$debut,$fin])
            ->select('logistiques.*','users.*')
            ->get();*/

        if($asc){
            return DB::table('logistiques')
                ->join('users','logistiques.user_id','=','users.id')
                ->where('users.asc',$asc)
                ->whereBetween('logistiques.created_at',[$debut,$fin])
                ->select('logistiques.*','users.*')
                ->get();
        }elseif(!$asc and $commune_id){
            return DB::table('logistiques')
                ->join('users','logistiques.user_id','=','users.id')
                ->where('users.commune_id',$commune_id)
                ->whereBetween('logistiques.created_at',[$debut,$fin])
                ->select('logistiques.*','users.*')
                ->get();
        }else{
            return DB::table('logistiques')
                ->join('users','logistiques.user_id','=','users.id')
                ->whereBetween('logistiques.created_at',[$debut,$fin])
                ->select('logistiques.*','users.*')
                ->get();
        }
    }
}