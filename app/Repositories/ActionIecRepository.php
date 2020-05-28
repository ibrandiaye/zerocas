<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 10/05/2020
 * Time: 21:51
 */

namespace App\Repositories;


use App\ActionIec;
use Illuminate\Support\Facades\DB;

class ActionIecRepository extends RessourceRepository{
    public function __construct(ActionIec $actionIec){
        $this->model = $actionIec;
    }
    public function getActionIecByAsc($asc,$debut,$fin,$commune_id){
        if($asc){
            return DB::table('action_iecs')
                ->join('users','action_iecs.user_id','=','users.id')
                ->where('users.asc',$asc)
                ->whereBetween('action_iecs.created_at',[$debut,$fin])
                ->select('action_iecs.*','users.*')
                ->get();
        }elseif (!$asc and $commune_id){
            return DB::table('action_iecs')
                ->join('users','action_iecs.user_id','=','users.id')
                ->where('users.commune_id',$commune_id)
                ->whereBetween('action_iecs.created_at',[$debut,$fin])
                ->select('action_iecs.*','users.*')
                ->get();
        }else{
            return DB::table('action_iecs')
                ->join('users','action_iecs.user_id','=','users.id')
                ->whereBetween('action_iecs.created_at',[$debut,$fin])
                ->select('action_iecs.*','users.*')
                ->get();
        }


    }
}