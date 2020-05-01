<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 27/04/2020
 * Time: 18:13
 */

namespace App\Repositories;


use App\Questionnaire;

class QuestionnaireRepository extends  RessourceRepository{
    public  function  __construct(Questionnaire $questionnaire)
    {
        $this->model = $questionnaire;
    }
}