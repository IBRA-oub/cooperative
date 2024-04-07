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
    
    
    public function dashboard(){
        return view('admin.admin-dashboard');
    }
   
    public function travailleurHaurs(){
        return view('admin.travailleur-heurs');
    }
    public function message(){
        return view('admin.message');
    }
    public function addUserPage(){
        return view('admin.add-user');
    }
   


   
}