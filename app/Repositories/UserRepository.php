<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 30/04/2020
 * Time: 18:06
 */

namespace App\Repositories;


use App\User;

class UserRepository extends RessourceRepository{
    public function __construct(User $user){
    $this->model = $user;
    }
    public function getUsers(){
        return User::with(['commune'])
            ->get();
    }
}