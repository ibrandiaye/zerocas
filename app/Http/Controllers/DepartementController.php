<?php

namespace App\Http\Controllers;

use App\Repositories\DepartementRepository;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    protected $regionRepository;
    protected $departementRepository;
    public function __construct(RegionRepository $regionRepository, DepartementRepository $departementRepository){
        $this->regionRepository = $regionRepository;
        $this->departementRepository = $departementRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = $this->departementRepository->getDepartements();
        return view('departement.index',compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = $this->regionRepository->getAll();
        return view('departement.add',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departement = $this->departementRepository->store($request->all());
        return redirect('departement');
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
        $departement = $this->departementRepository->getById($id);
        $regions = $this->regionRepository->getAll();
        return view("departement.edit",compact('departement','regions'));
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
        $this->departementRepository->update($id,$request->all());
        return redirect('departement');
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
