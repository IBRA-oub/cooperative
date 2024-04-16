<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\FinanciereServiceInterface;

class financiereController extends Controller
{
    protected $financiereService;
    public function __construct( FinanciereServiceInterface $financiereService )
     {
        $this->financiereService = $financiereService;
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
        $this->financiereService->createMateriel($data);
        
        return redirect()->route('financiere-materiel')->with('success','Materiel ajouter avec success');
    }
    
    public function redMateriel(){
        
       $materiels = $this->financiereService->allMateriel();
       return view('financiere.materiel',['materiels' => $materiels]);
    }
    public function editMateriel($id){
        $materiel = $this->financiereService->find($id);
        return view('financiere.edit-materiel',['materiel' => $materiel]);
    }
    
    public function updateMateriel(Request $request,$id){
        $data = $request->validate([
            'nom' => 'required',
            'quantiter' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->financiereService->update($data,$id);
        return redirect()->route('financiere-materiel')->with('success','Materiel mise a jour avec success');
    }
    public function materielDelete($id){
        $this->financiereService->delete($id);
        return redirect()->route('financiere-materiel')->with('success','Materiel supprimer avec success');
    }
    // _______________________________________
    
    // ________________________Electriciter/eau_______________
    
    public function addElectriciterEeau(){
        return view('financiere.add-electriciter-eau');
    }
    public function addElectriciterEeauPost(Request $request){
        $data = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->financiereService->createElectriciterEau($data);
        
        return redirect()->route('financiere-electriciter-eau')->with('success',' ajouter avec success');
    }
    public function redElectriciterEau(){
        
        $electriciterEau = $this->financiereService->allElectriciterEau();
        return view('financiere.electriciter-eau',['electriciterEau' => $electriciterEau]);
        
       
    }

    public function ElectriciterEeauDelete($id){
        $this->financiereService->delete($id);
        return redirect()->route('financiere-electriciter-eau')->with('success',' supprimer avec success');
    }
    
    public function editElectriciterEau($id){
        $electriciterEau = $this->financiereService->find($id);
        return view('financiere.edit-electriciter-eau',['electriciterEau' => $electriciterEau]);
        
    }
    public function updateElectriciterEau(Request $request,$id){
        $data = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->financiereService->update($data,$id);
        return redirect()->route('financiere-electriciter-eau')->with('success',' mise a jour avec success');
    }

    // _____________________________________________________

    // ___________________Location___________________

   
    public function addLocation(){
        return view('financiere.add-location');
    }
    public function redLocation(){
        
        $locations = $this->financiereService->allLocation();
        return view('financiere.location',['locations' => $locations]);
        
       
    }
    public function addLocationPost(Request $request){
        $data = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->financiereService->createLocation($data);
        
        return redirect()->route('financiere-location')->with('success',' Location charge ajouter avec success');
        
    }
    public function locationDelete($id){
        $this->financiereService->delete($id);
        return redirect()->route('financiere-location')->with('success','location supprimer avec success');
    }

    
    

    public function editLocation($id){
        $location = $this->financiereService->find($id);
        return view('financiere.edit-location',['location' => $location]);
    }
    public function updateLocation(Request $request,$id){
        $data = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'date' => 'required'
        ]);
        $this->financiereService->update($data,$id);
        return redirect()->route('financiere-location')->with('success','Location mise a jour avec success');
    }
    // ______________________________________________
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
   
    
    // _____________________________
    public function editRevenu(){
        return view('financiere.edit-revenu');
    }
    public function editMateriaux(){
        return view('financiere.edit-materiaux');
    }
    
    
   
}