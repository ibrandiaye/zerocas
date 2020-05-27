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
    public function getActionIecByAsc($asc,$debut,$fin){
        return DB::table('action_iecs')
            ->join('users','action_iecs.user_id','=','users.id')
            ->where('users.asc',$asc)
            ->whereBetween('action_iecs.created_at',[$debut,$fin])
            ->select('action_iecs.*','users.*')
            ->get();

    }
}