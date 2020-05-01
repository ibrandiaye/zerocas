<?php

namespace App\Http\Controllers;

use App\Repositories\CommuneRepository;
use App\Repositories\DepartementRepository;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    protected $communeRepository;
    protected $departementRepository;

    public function __construct(CommuneRepository $communeRepository, DepartementRepository $departementRepository){
        $this->communeRepository = $communeRepository;
        $this->departementRepository = $departementRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communes = $this->communeRepository->getCommunes();
        return view('commune.index',compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = $this->departementRepository->getAll();
        return view('commune.add',compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commune = $this->communeRepository->store($request->all());
        return redirect('commune');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departements = $this->departementRepository->getAll();
        $commune = $this->communeRepository->getById($id);
        return view('commune.edit',compact('departements','commune'));
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
        $this->communeRepository->update($id,$request->all());
        return redirect('commune');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
