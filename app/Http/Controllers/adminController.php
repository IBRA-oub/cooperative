<?php

namespace App\Http\Controllers;

use App\Models\Financiere;
use App\Repositories\AdminRepository;
use App\Repositories\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'picture' => '|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/image', $imageName);
            
        }
        
        $validatedUserData['picture'] = $imageName;
        $validatedUserData['password'] = Hash::make($request->password);
        
        // __________verfied email___________
        $usersEmail = $this->adminRepository->allUser();
        foreach($usersEmail as $user)
        if($user->email == $request->email){
            return redirect()->route('admin-travailleur')->with('error','email existe déjà .');
        }

        // __________________________debut de la creation des utilisateur_______________
        $user = $this->adminRepository->create($validatedUserData);  
        $userId = $user->id;
    
                //    ______________financiere___________
                if ($request->role === 'financiere') {
        $existingFinancial = $this->adminRepository->getFirstFinanciere();

            if ($existingFinancial) {
                $this->adminRepository->delete($userId);
                return redirect()->route('admin-travailleur')->with('error','Un compte financier existe déjà .');
            }
    
           
            $validatedFinancialData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedFinancialData['user_id'] = $userId;
            
            $this->adminRepository->createFinanciere($validatedFinancialData);
            
            return redirect()->route('admin-travailleur')->with('success','Financiere ajouter avec success');
            
        } 
        
                //    ______________planner___________
                if($request->role === 'planner'){
                $existingPlanner =  $this->adminRepository->getFirstPlanner();

                if ($existingPlanner) {
                    $this->adminRepository->delete($userId);
                    return redirect()->route('admin-travailleur')->with('error','Un compte planner existe déjà.');
                }

            $validatedPlannerData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPlannerData['user_id'] = $userId;
            
            $this->adminRepository->createPlanner($validatedPlannerData);
            
            return redirect()->route('admin-travailleur')->with('success','Planner ajouter avec success');            
        }
        
             //    ______________Stockiste___________
             if($request->role === 'stockiste'){
             $existingStockiste =  $this->adminRepository->getFirstStockiste();

             if ($existingStockiste) {
                 $this->adminRepository->delete($userId);
                 return redirect()->route('admin-travailleur')->with('error','Un compte stockiste existe déjà.');
             }
        

            $validatedStockisteData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedStockisteData['user_id'] = $userId;
            
            $this->adminRepository->createStockiste($validatedStockisteData);
            
            return redirect()->route('admin-travailleur')->with('success','stockiste ajouter avec success');
            
        }

    
         if($request->role === 'travailleur'){

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
    public function travailleur() {
        $users = $this->adminRepository->allUser();
        $users->load('financiere', 'planner', 'stockiste', 'travailleur');
        
        $totaleHeursFi = 0;
        foreach($users as $user) {
            if($user->financiere) {
                $totaleHeursFi += $this->adminRepository->financiereHoursTotal();
            }
        }
    
        $totaleHeursPl = 0;
        foreach($users as $user) {
            if($user->planner) {
                $totaleHeursPl += $this->adminRepository->plannerHoursTotal();
            }
        }
    
        $totaleHeursSt = 0;
        foreach($users as $user) {
            if($user->stockiste) {
                $totaleHeursSt += $this->adminRepository->stockisteHoursTotal();
            }
        }
    
       
    
        $totaleHeursTr = 0;
        foreach($users as $user) {
            if($user->travailleur) {
                $totaleHeursTr += $this->adminRepository->travailleurHoursTotal()->sum('heures');
            }
        }
    
        return view('admin.travailleur', [
            'users' => $users,
            'totaleHeursFi' => $totaleHeursFi,
            'totaleHeursPl' => $totaleHeursPl,
            'totaleHeursSt' => $totaleHeursSt,
           
            'totaleHeursTr' => $totaleHeursTr
        ]);
    }
    
    // ____________edite_______________

    public function editUser($id){
        $user = $this->adminRepository->editeUser($id);
        $user->load('financiere', 'planner', 'stockiste', 'travailleur');

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
           
            return view('admin.travailleur-heurs',['Heures'=>$financiereHeure]);
        }
        elseif($type == 'planner'){
            $plannerHeure =  $this->adminRepository->plannerHours($id);
            
             return view('admin.travailleur-heurs',['Heures'=>$plannerHeure]);
        } elseif($type == 'stockiste'){
            $stockisteHeure =  $this->adminRepository->stockisteHours($id);
            
             return view('admin.travailleur-heurs',['Heures'=>$stockisteHeure]);
        }  elseif($type == 'travailleur'){
            $travailleurHeure =  $this->adminRepository->travailleurHours($id);
            
             return view('admin.travailleur-heurs',['Heures'=>$travailleurHeure]);
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

    // _________________publiciter_______________



    public function addPubliciter(Request $request){
        $data = $request->validate([
            'titre' => 'required',
            
            'contenu' => 'required',
            
            'picture' => 'required'
        ]);
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/image', $imageName);
            
        }
        
        $data['picture'] = $imageName;
        $data['admin_id'] = auth()->user()->admin->id;
        $this->adminRepository->storePubliciter($data);
        
        return redirect()->route('publicitaire')->with('success','publiciter ajouter avec success');
    }
    public function PubliciterDelete($id){
        $this->adminRepository->deletePubliciter($id);
        return redirect()->route('publicitaire')->with('success','publiciter supprimer avec success');
    }
    public function publicitaire(){
        $publiciters = $this->adminRepository->redPubliciter(); 
        
        return view('admin.publicitaire',['publiciters' => $publiciters ]);
    }

    public function editPubliciter($id){
        $publiciter = $this->adminRepository->findPubliciter($id);
        return view('admin.edit-publiciter',['publiciter' => $publiciter]);
    }
    public function updatePubliciter(Request $request,$id){
        $data = $request->validate([
            'titre' => 'required',
            
            'contenu' => 'required',
            
            'picture' => 'required'
        ]);
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/image', $imageName);
            
        }
        
        $data['picture'] = $imageName;
        $this->adminRepository->updatePubliciter($data,$id);
        
        return redirect()->route('publicitaire')->with('success',' publiciter mise a jour avec success');
    }
   


   
}