<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository){
        $this->articleRepository = $articleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->articleRepository->getAll();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     /*   $this->validate($request, [
            'titre'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);*/

        if ($files = $request->file('img')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage =  time(). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $request->merge(['image'=>$profileImage]);
            //$hotel->logo= "$profileImage";
        }
        $article = $this->articleRepository->store($request->all());
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = $this->articleRepository->getById($id);
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = $this->articleRepository->getById($id);
        return view('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($files = $request->file('img')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage =  time(). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $request->merge(['image'=>$profileImage]);
            //$hotel->logo= "$profileImage";
        }
        $this->articleRepository->update($id,$request->all());
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->articleRepository->destroy($id);
        return redirect('article');
    }
    public function getAllAticle(){
        $articles = $this->articleRepository->getArticles();
        return response()->json($articles);
    }
}
