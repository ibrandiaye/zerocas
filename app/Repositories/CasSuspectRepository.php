<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:45
 */

namespace App\Repositories;


use App\CasSupect;
use Illuminate\Support\Facades\DB;

class CasSuspectRepository extends RessourceRepository{
    public function __construct(CasSupect $casSupect){
        $this->model =$casSupect;
    }
    public function getCasdeSupectByAsc($asc,$debut,$fin,$commune_id){

        if($asc){
            return DB::table('cas_supects')
                ->join('users','cas_supects.user_id','=','users.id')
                ->where('users.asc',$asc)
                ->whereBetween('cas_supects.created_at',[$debut,$fin])
                ->select('cas_supects.*','users.*')
                ->get();
        }elseif(!$asc and $commune_id){
            return DB::table('cas_supects')
                ->join('users','cas_supects.user_id','=','users.id')
                ->where('users.commune_id',$commune_id)
                ->whereBetween('cas_supects.created_at',[$debut,$fin])
                ->select('cas_supects.*','users.*')
                ->get();
        }

        else{
            return DB::table('cas_supects')
                ->join('users','cas_supects.user_id','=','users.id')
                ->whereBetween('cas_supects.created_at',[$debut,$fin])
                ->select('cas_supects.*','users.*')
                ->get();
        }


    }
}