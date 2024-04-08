<?php

namespace App\Http\Controllers;

use App\Repositories\AdminRepository;
use App\Repositories\AdminRepositoryInterface;
use Illuminate\Http\Request;

class adminController extends Controller
{

    protected $adminRepository;

    public function __construct(AdminRepositoryInterface $AdminRepository)
    {
        $this->adminRepository = $AdminRepository;
    }


    public function addUser(Request $request)
    {

        $validatedUserData = $request->validate([
            'fullName' => 'required|string',
            'email' => 'required',
            'password' => 'required',
            'picture' => 'required'
        ]);
    
        
        $user = $this->adminRepository->create($validatedUserData);  
        $userId = $user->id;
    
        if ($request->role === 'financiere') {
           
            $validatedFinancialData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedFinancialData['user_id'] = $userId;
            
            $this->adminRepository->createFinanciere($validatedFinancialData);
            
            return redirect()->route('admin-travailleur')->with('success','Financiere ajouter avec success');
            
        } else if($request->role === 'planner'){

            $validatedPlannerData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPlannerData['user_id'] = $userId;
            
            $this->adminRepository->createPlanner($validatedPlannerData);
            
            return redirect()->route('admin-travailleur')->with('success','Planner ajouter avec success');            
        }else if($request->role === 'stockiste'){

            $validatedStockisteData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedStockisteData['user_id'] = $userId;
            
            $this->adminRepository->createStockiste($validatedStockisteData);
            
            return redirect()->route('admin-travailleur')->with('success','stockiste ajouter avec success');
            
        }else if($request->role === 'publicitaire'){

            $validatedPublicitaireData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPublicitaireData['user_id'] = $userId;
            
            $this->adminRepository->createPublicitaire($validatedPublicitaireData);
            
            return redirect()->route('admin-travailleur')->with('success','Publicitaire ajouter avec success');
            
        }else if($request->role === 'travailleur'){

            $validatedTravailleurData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedTravailleurData['user_id'] = $userId;
            
            $this->adminRepository->createTravailleur($validatedTravailleurData);
            
            return redirect()->route('admin-travailleur')->with('success','Travailleur ajouter avec success');
            
        }else{
            return redirect()->route('admin-travailleur')->with('error','il y a une probleme lors de l\'ajoute');
        }
        
    }
   
    // __________red user____________
     public function travailleur(){
        $users = $this->adminRepository->allUser();
          $users->load('financiere', 'planner', 'stockiste', 'publicitaire', 'travailleur');
       
        
    return view('admin.travailleur', ['users' => $users]);
       
    }
    // ____________edite_______________

    public function editUser($id){
        $user = $this->adminRepository->editeUser($id);
        $user->load('financiere', 'planner', 'stockiste', 'publicitaire', 'travailleur');

        return view('admin.edit-user',['user' => $user]);
    }
    // _____________update_______________
    
    public function updateUser(Request $request,$id)
    {
  
        

        $validatedUserData = $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'picture' => 'required',
        ]);
        
        
    

        $user = $this->adminRepository->update($validatedUserData,$id);  
        $userId = $user->id;
        
     
        if ($request->role === 'financiere') {
           
            $validatedFinancialData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedFinancialData['user_id'] = $userId;
            
            $this->adminRepository->updateFinanciere($validatedFinancialData);
            
            return redirect()->route('admin-travailleur')->with('success','Financiere mise a jour avec success');
            
        } else if($request->role === 'planner'){

            $validatedPlannerData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPlannerData['user_id'] = $userId;
            
            $this->adminRepository->updatePlanner($validatedPlannerData);
            
            return redirect()->route('admin-travailleur')->with('success','Planner mise a jour avec success');            
            
           }else if($request->role === 'stockiste'){

            $validatedStockisteData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedStockisteData['user_id'] = $userId;
            
            $this->adminRepository->updateStockiste($validatedStockisteData);
            
            return redirect()->route('admin-travailleur')->with('success','stockiste mise a jour avec success');
            
        }else if($request->role === 'publicitaire'){

            $validatedPublicitaireData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPublicitaireData['user_id'] = $userId;
            
            $this->adminRepository->updatePublicitaire($validatedPublicitaireData);
            
            return redirect()->route('admin-travailleur')->with('success','Publicitaire mise ajour avec success');
            
        }else if($request->role === 'travailleur'){

            $validatedTravailleurData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedTravailleurData['user_id'] = $userId;
            
            $this->adminRepository->updateTravailleur($validatedTravailleurData);
            
            return redirect()->route('admin-travailleur')->with('success','Travailleur mise a jour avec success');
            
        }else{
            return redirect()->route('admin-travailleur')->with('error','il y a une probleme lors de l\'ajoute');
        }
    
        
    }
   

    // ___________________delete__________

    public function deleteUser($id){
        
        $this->adminRepository->delete($id);
            
        return redirect()->route('admin-travailleur')->with('success','Travailleur supprimer avec success');
    }
    
    // ___________________create hours__________

    public function addHours(Request $request){
        
        // dd($request);
        $userType = $request->input('user_type');
        // dd($userType);
        $validatedData = $request->validate([
            'heurs' => 'required',
        ]);

        // dd($validatedData);
    
        
        if ($userType == "financiere") {
            
            $validatedData['financiere_id'] = $request->input('user_id');
            $this->adminRepository->createHoursFinanciere($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        }
         elseif ($userType == "planner") {
            
            $validatedData['planner_id'] = $request->input('user_id');
            $this->adminRepository->createHoursPlanner($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        } 
        elseif ($userType == "stockiste") {
            
            $validatedData['stockiste_id'] = $request->input('user_id');
            $this->adminRepository->createHoursStockiste($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        } 
        elseif ($userType == "publicitaire") {
            
            $validatedData['publicitaire_id'] = $request->input('user_id');
            $this->adminRepository->createHoursPublicitaire($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        } 
        elseif ($userType == "travailleur") {
             
            $validatedData['travailleur_id'] = $request->input('user_id');
            $this->adminRepository->createHoursTravailleur($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        }
    
        
        return redirect()->route('admin-travailleur')->with('success', 'error lors d\'ajoute.');

       
    }
    
    
    // __________________get hours___________________
    
    public function travailleurHaurs($id , $type){
    
        if($type == 'financiere'){
           $financiereHeure =  $this->adminRepository->financiereHours($id);
           dd($financiereHeure);
            return view('admin.travailleur-heurs',['financiereHeure'=>$financiereHeure]);
        }
        elseif($type == 'planner'){
            $plannerHeure =  $this->adminRepository->plannerHours($id);
            dd($plannerHeure);
             return view('admin.travailleur-heurs',['plannerHeure'=>$plannerHeure]);
        } elseif($type == 'stockiste'){
            $stockisteHeure =  $this->adminRepository->stockisteHours($id);
            dd($stockisteHeure);
             return view('admin.travailleur-heurs',['stockisteHeure'=>$stockisteHeure]);
        } elseif($type == 'publicitaire'){
            $publicitaireHeure =  $this->adminRepository->publicitaireHours($id);
            dd($publicitaireHeure);
             return view('admin.travailleur-heurs',['publicitaireHeure'=>$publicitaireHeure]);
        } elseif($type == 'travailleur'){
            $travailleurHeure =  $this->adminRepository->travailleurHours($id);
            dd($travailleurHeure);
             return view('admin.travailleur-heurs',['travailleurHeure'=>$travailleurHeure]);
        }
    }


    
    public function dashboard(){
        return view('admin.admin-dashboard');
    }
   
    public function message(){
        return view('admin.message');
    }
    public function addUserPage(){
        return view('admin.add-user');
    }
   


   
}