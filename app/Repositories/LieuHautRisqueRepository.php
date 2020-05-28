<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:51
 */

namespace App\Repositories;


use App\LieuHautRisque;
use Illuminate\Support\Facades\DB;

class LieuHautRisqueRepository extends  RessourceRepository{
    public function __construct(LieuHautRisque $lieuHautRisque){
        $this->model = $lieuHautRisque;
    }
    public function getLieuHautRisqueByAsc($asc,$debut,$fin,$commune_id){
        if($asc){
            return DB::table('lieu_haut_risques')
                ->join('users','lieu_haut_risques.user_id','=','users.id')
                ->where('users.asc',$asc)
                ->whereBetween('lieu_haut_risques.created_at',[$debut,$fin])
                ->select('lieu_haut_risques.*','users.*')
                ->get();
        }elseif(!$asc and $commune_id){
            return DB::table('lieu_haut_risques')
                ->join('users','lieu_haut_risques.user_id','=','users.id')
                ->where('users.commune_id',$commune_id)
                ->whereBetween('lieu_haut_risques.created_at',[$debut,$fin])
                ->select('lieu_haut_risques.*','users.*')
                ->get();
        }else{
            return DB::table('lieu_haut_risques')
                ->join('users','lieu_haut_risques.user_id','=','users.id')
                ->whereBetween('lieu_haut_risques.created_at',[$debut,$fin])
                ->select('lieu_haut_risques.*','users.*')
                ->get();
        }


    }
}