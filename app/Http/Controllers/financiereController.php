<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FinanciereService;

class financiereController extends Controller
{
    public function __construct(
        protected FinanciereService $userService
      ) {
    }
    
   
    
    // ___________________Materiel______________

    public function addMateriel(){
        return view('financiere.add-materiel');
    }
    public function addMaterielPost(Request $request){
        $data = $request->validate([
            'nom' => 'required',
            'quantiter' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->userService->createMateriel($data);
        
        return redirect()->route('financiere-materiel')->with('success','Materiel ajouter avec success');
    }
    
    public function redMateriel(){
        
       $materiels = $this->userService->allMateriel();
       return view('financiere.materiel',['materiels' => $materiels]);
    }
    public function editMateriel($id){
        $materiel = $this->userService->find($id);
        return view('financiere.edit-materiel',['materiel' => $materiel]);
    }

    public function updateMateriel(Request $request,$id){
        $data = $request->validate([
            'nom' => 'required',
            'quantiter' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->userService->update($data,$id);
        return redirect()->route('financiere-materiel')->with('success','Materiel mise a jour avec success');
    }
    public function materielDelete($id){
        $this->userService->delete($id);
        return redirect()->route('financiere-materiel')->with('success','Materiel supprimer avec success');
    }
    // _______________________________________
    public function dashboard(){
        return view('financiere.financiere-dashboard');
    }
    public function redRevenu(){
        return view('financiere.revenu');
    }
    // _________________________________

    
    public function redMateriaux(){
        return view('financiere.materiaux');
    }
    public function redCharge(){
        return view('financiere.charge');
    }
    public function redElectriciterEau(){
        return view('financiere.electriciter-eau');
    }
    public function redLocation(){
        return view('financiere.location');
    }

    // ___________________________________
    
    public function message(){
        return view('financiere.message');
    }

    // _____________________________________
    
    public function addRevenu(){
        return view('financiere.add-revenu');
    }
    public function addMateriaux(){
        return view('financiere.add-materiaux');
    }
    public function addLocation(){
        return view('financiere.add-location');
    }
    public function addElectriciterEeau(){
        return view('financiere.add-electriciter-eau');
    }
    // _____________________________
    public function editRevenu(){
        return view('financiere.edit-revenu');
    }
    public function editMateriaux(){
        return view('financiere.edit-materiaux');
    }
    
    public function editLocation(){
        return view('financiere.edit-location');
    }
    public function editElectriciterEau(){
        return view('financiere.edit-electriciter-eau');
    }
}