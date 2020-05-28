<?php

namespace App\Http\Controllers;

use App\Repositories\ActionIecRepository;
use App\Repositories\AlerteRepository;
use App\Repositories\CasSuspectRepository;
use App\Repositories\CommuneRepository;
use App\Repositories\LieuHautRisqueRepository;
use App\Repositories\LogistiqueRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $communeRepository;
    protected $casSuspectRepository;
    protected $alerteRepository;
    protected  $actionIecRepository;
    protected $logistiqueRepository;
    protected $lieuHautRisqueRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CommuneRepository $communeRepository, CasSuspectRepository $casSuspectRepository,
    AlerteRepository $alerteRepository, ActionIecRepository $actionIecRepository, LogistiqueRepository $logistiqueRepository,
            LieuHautRisqueRepository $lieuHautRisqueRepository)
    {
       // $this->middleware('auth');
        $this->communeRepository = $communeRepository;
        $this->casSuspectRepository = $casSuspectRepository;
        $this->actionIecRepository = $actionIecRepository;
        $this->alerteRepository = $alerteRepository;
        $this->logistiqueRepository = $logistiqueRepository;
        $this->lieuHautRisqueRepository = $lieuHautRisqueRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $actions=null;
        $suspects = null;
        $logistiques=null;
        $alertes = null;
        $risques= null;
        $communes = $this->communeRepository->getAll();
        return view('welcome',compact('communes','actions','suspects','logistiques','alertes','risques'));
    }
    public function rechercher(Request $request){
        request()->validate([
            'debut' => 'required',
            'fin' => 'required',
            'categorie' => 'required'

        ]);
        $actions=null;
        $suspects = null;
        $logistiques=null;
        $alertes = null;
        $risques= null;
        if( $request['fin'] <= $request['debut']){
            return redirect()->route('welcome')->with('error', 'Verifier la date de debut et la date fin');

        }
        $communes = $this->communeRepository->getAll();
        if($request['categorie']=='casSuspect'){
            $suspects = $this->casSuspectRepository->getCasdeSupectByAsc($request['asc'],$request['debut'],$request['fin'],$request['commune_id']);

            return view('welcome',compact('communes','actions','suspects','logistiques','alertes','risques'));
        }elseif($request['categorie']=='actionIec'){
            $actions = $this->actionIecRepository->getActionIecByAsc($request['asc'],$request['debut'],$request['fin'],$request['commune_id']);
            return view('welcome',compact('communes','actions','suspects','logistiques','alertes','risques'));
        }elseif($request['categorie']=='alerte'){
            $alertes = $this->alerteRepository->getAlerteByAsc($request['asc'],$request['debut'],$request['fin'],$request['commune_id']);
            return view('welcome',compact('communes','actions','suspects','logistiques','alertes','risques'));

        }elseif($request['categorie']=='risque'){
            $risques = $this->lieuHautRisqueRepository->getLieuHautRisqueByAsc($request['asc'],$request['debut'],$request['fin'],$request['commune_id']);
            return view('welcome',compact('communes','actions','suspects','logistiques','alertes','risques'));

        }else{
            $logistiques = $this->logistiqueRepository->getLogistiqueByAsc($request['asc'],$request['debut'],$request['fin'],$request['commune_id']);
            return view('welcome',compact('communes','actions','suspects','logistiques','alertes','risques'));
        }

        //dd($casSuspect);

    }
    public function getAscByCommune($commune){
        $asc = $this->communeRepository->getAscByCommune($commune);
      //  dd($asc);
        return response()->json($asc);
    }

}
