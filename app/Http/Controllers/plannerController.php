<?php

namespace App\Http\Controllers;

use App\Services\PlannerServiceInterface;
use Illuminate\Http\Request;

class plannerController extends Controller
{
    protected $plannerService;
    public function __construct( PlannerServiceInterface $plannerService )
     {
        $this->plannerService = $plannerService;
    }

    // ______________________periode______________

    public function addPeriodePost(Request $request){
        $data = $request->validate([
            'titre' => 'required',
            'dateDepart' => 'required',
            'dateStop' => 'required'
        ]);
        $this->plannerService->createPeriode($data);
        
        return redirect()->route('planner-dashboard')->with('success','periode ajouter avec success');
    }
    public function periodeDelete($id){
        $this->plannerService->deletePeriode($id);
        return redirect()->route('planner-dashboard')->with('success','periode supprimer avec success');
    }
    public function dashboard(){
        $periods = $this->plannerService->redAllPeriode();
        $produits = $this->plannerService->redAllProduit();
        return view('planner.planner-dashboard',['periods' => $periods,'produits' => $produits]);
    }

    public function editPeriode($id){
        $periode = $this->plannerService->findPeriode($id);
        return view('planner.edit-periode',['periode' => $periode]);
    }
    public function updatePeriode(Request $request,$id){
        $data = $request->validate([
            'titre' => 'required',
            'dateDepart' => 'required',
            'dateStop' => 'required'
        ]);
        $this->plannerService->updatePeriode($data,$id);
        
        return redirect()->route('planner-dashboard')->with('success','periode mise a jour avec success');
    }
    // ___________________________________

    // __________________produit_Plante_________________


    
    public function addProduitPost(Request $request){
        $data = $request->validate([
            'nom' => 'required',
            'periode_id' => 'required',
           
        ]);
        $this->plannerService->createProduit($data);
        
        return redirect()->route('planner-dashboard')->with('success','produit ajouter avec success');
    }
    public function produitDelete($id){
        $this->plannerService->deleteProduit($id);
        return redirect()->route('planner-dashboard')->with('success','produit supprimer avec success');
    }
   

    public function editProduit($id){
        $produit = $this->plannerService->findProduit($id);
        $periods = $this->plannerService->redAllPeriode();
        return view('planner.edit-produit-planner',['produit' => $produit, 'periods' => $periods]);
    }
    public function updateProduit(Request $request,$id){
        $data = $request->validate([
            'nom' => 'required',
            'periode_id' => 'required'
        ]);
        $this->plannerService->updateProduit($data,$id);
        
        return redirect()->route('planner-dashboard')->with('success','produit mise a jour avec success');
    }

    // _________________________________________________
    public function infoStati(){
        return view('planner.info-stati');
    }
    public function message(){
        return view('planner.message');
    }

    public function editMateriauxOutils(){
        return view('planner.edit-materiaux-outils');
    }
   
   
}