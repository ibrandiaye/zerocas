<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 27/04/2020
 * Time: 18:16
 */

namespace App\Repositories;


use App\Article;

class ArticleController extends RessourceRepository{

    public function __construct(Article $article){
        $this->model = $article;
    }
}