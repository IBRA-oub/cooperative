<?php

namespace App\Http\Controllers;

use App\Services\AdminServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{

    protected $adminService;

    public function __construct(AdminServiceInterface $adminService)
    {
        $this->adminService = $adminService;
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
        $usersEmail = $this->adminService->allUser();
        foreach($usersEmail as $user)
        if($user->email == $request->email){
            return redirect()->route('admin-travailleur')->with('error','email existe déjà .');
        }

        // __________________________debut de la creation des utilisateur_______________
        $user = $this->adminService->create($validatedUserData);  
        $userId = $user->id;
    
                //    ______________financiere___________
                if ($request->role === 'financiere') {
        $existingFinancial = $this->adminService->getFirstFinanciere();

            if ($existingFinancial) {
                $this->adminService->delete($userId);
                return redirect()->route('admin-travailleur')->with('error','Un compte financier existe déjà .');
            }
    
           
            $validatedFinancialData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedFinancialData['user_id'] = $userId;
            
            $this->adminService->createFinanciere($validatedFinancialData);
            
            return redirect()->route('admin-travailleur')->with('success','Financiere ajouter avec success');
            
        } 
        
                //    ______________planner___________
                if($request->role === 'planner'){
                $existingPlanner =  $this->adminService->getFirstPlanner();

                if ($existingPlanner) {
                    $this->adminService->delete($userId);
                    return redirect()->route('admin-travailleur')->with('error','Un compte planner existe déjà.');
                }

            $validatedPlannerData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPlannerData['user_id'] = $userId;
            
            $this->adminService->createPlanner($validatedPlannerData);
            
            return redirect()->route('admin-travailleur')->with('success','Planner ajouter avec success');            
        }
        
             //    ______________Stockiste___________
             if($request->role === 'stockiste'){
             $existingStockiste =  $this->adminService->getFirstStockiste();

             if ($existingStockiste) {
                 $this->adminService->delete($userId);
                 return redirect()->route('admin-travailleur')->with('error','Un compte stockiste existe déjà.');
             }
        

            $validatedStockisteData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedStockisteData['user_id'] = $userId;
            
            $this->adminService->createStockiste($validatedStockisteData);
            
            return redirect()->route('admin-travailleur')->with('success','stockiste ajouter avec success');
            
        }

    
         if($request->role === 'travailleur'){

            $validatedTravailleurData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedTravailleurData['user_id'] = $userId;
            
            $this->adminService->createTravailleur($validatedTravailleurData);
            
            return redirect()->route('admin-travailleur')->with('success','Travailleur ajouter avec success');
            
        }else{
            return redirect()->route('admin-travailleur')->with('error','il y a une probleme lors de l\'ajoute');
        }
        
    }
   
    // __________red user____________
    public function travailleur() {
        $users = $this->adminService->allUser();
        $users->load('financiere', 'planner', 'stockiste', 'travailleur');
        
        $totaleHeursFi = 0;
        foreach($users as $user) {
            if($user->financiere) {
                $totaleHeursFi += $this->adminService->financiereHoursTotal();
            }
        }
    
        $totaleHeursPl = 0;
        foreach($users as $user) {
            if($user->planner) {
                $totaleHeursPl += $this->adminService->plannerHoursTotal();
            }
        }
    
        $totaleHeursSt = 0;
        foreach($users as $user) {
            if($user->stockiste) {
                $totaleHeursSt += $this->adminService->stockisteHoursTotal();
            }
        }
    
       
    
        $totaleHeursTr = 0;
        foreach($users as $user) {
            if($user->travailleur) {
                $totaleHeursTr = $this->adminService->travailleurHoursTotal();;
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
        $user = $this->adminService->editeUser($id);
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
        
        
    

        $user = $this->adminService->update($validatedUserData,$id);  
        $userId = $user->id;
        
     
        if ($request->role === 'financiere') {
           
            $validatedFinancialData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedFinancialData['user_id'] = $userId;
            
            $this->adminService->updateFinanciere($validatedFinancialData);
            
            return redirect()->route('admin-travailleur')->with('success','Financiere mise a jour avec success');
            
        } else if($request->role === 'planner'){

            $validatedPlannerData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedPlannerData['user_id'] = $userId;
            
            $this->adminService->updatePlanner($validatedPlannerData);
            
            return redirect()->route('admin-travailleur')->with('success','Planner mise a jour avec success');            
            
           }else if($request->role === 'stockiste'){

            $validatedStockisteData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedStockisteData['user_id'] = $userId;
            
            $this->adminService->updateStockiste($validatedStockisteData);
            
            return redirect()->route('admin-travailleur')->with('success','stockiste mise a jour avec success');
            
        }else if($request->role === 'travailleur'){

            $validatedTravailleurData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedTravailleurData['user_id'] = $userId;
            
            $this->adminService->updateTravailleur($validatedTravailleurData);
            
            return redirect()->route('admin-travailleur')->with('success','Travailleur mise a jour avec success');
            
        }else{
            return redirect()->route('admin-travailleur')->with('error','il y a une probleme lors de l\'ajoute');
        }
    
        
    }
   

    // ___________________delete__________

    public function deleteUser($id){
        
        $this->adminService->delete($id);
            
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
            $this->adminService->createHoursFinanciere($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        }
         elseif ($userType == "planner") {
            
            $validatedData['planner_id'] = $request->input('user_id');
            $this->adminService->createHoursPlanner($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        } 
        elseif ($userType == "stockiste") {
            
            $validatedData['stockiste_id'] = $request->input('user_id');
            $this->adminService->createHoursStockiste($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        } 
       
        elseif ($userType == "travailleur") {
             
            $validatedData['travailleur_id'] = $request->input('user_id');
            $this->adminService->createHoursTravailleur($validatedData);
            return redirect()->route('admin-travailleur')->with('success', 'Heures travaillées ajoutées avec succès.');
        }
    
        
        return redirect()->route('admin-travailleur')->with('success', 'error lors d\'ajoute.');

       
    }
    
    
    // __________________get hours___________________
    
    public function travailleurHeurs($id , $type){
    
        if($type == 'financiere'){
           $financiereHeure =  $this->adminService->financiereHours($id);
           
            return view('admin.travailleur-heurs',['Heures'=>$financiereHeure]);
        }
        elseif($type == 'planner'){
            $plannerHeure =  $this->adminService->plannerHours($id);
            
             return view('admin.travailleur-heurs',['Heures'=>$plannerHeure]);
        } elseif($type == 'stockiste'){
            $stockisteHeure =  $this->adminService->stockisteHours($id);
            
             return view('admin.travailleur-heurs',['Heures'=>$stockisteHeure]);
        }  elseif($type == 'travailleur'){
            $travailleurHeure =  $this->adminService->travailleurHours($id);
            
             return view('admin.travailleur-heurs',['Heures'=>$travailleurHeure]);
        }
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
        $this->adminService->storePubliciter($data);
        
        return redirect()->route('publicitaire')->with('success','publiciter ajouter avec success');
    }
    public function PubliciterDelete($id){
        $this->adminService->deletePubliciter($id);
        return redirect()->route('publicitaire')->with('success','publiciter supprimer avec success');
    }
    public function publicitaire(){
        $publiciters = $this->adminService->redPubliciter(); 
        
        return view('admin.publicitaire',['publiciters' => $publiciters ]);
    }

    public function editPubliciter($id){
        $publiciter = $this->adminService->findPubliciter($id);
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
        $this->adminService->updatePubliciter($data,$id);
        
        return redirect()->route('publicitaire')->with('success',' publiciter mise a jour avec success');
    }
   

    // ____________________________home page____________________________

    
    public function Welcome(){
        $publiciter = $this->adminService->redLastPubliciter();
        $periodes = $this->adminService->redPeriodes();
        $countCharge = $this->adminService->countCharge();
        $countChargePrix = $this->adminService->countChargePrix();
        $countRevenu = $this->adminService->countRevenu();
        $countRevenuPrix = $this->adminService->countRevenuPrix();
        $HoursTotal = $this->adminService->HoursTotal();
        $TravailleurTotal = $this->adminService->TravailleurTotal()+4;
        $countStocke = $this->adminService->countStocke();
       
        return view('welcome',['publiciter' => $publiciter,'periodes' => $periodes,'countCharge'=>$countCharge,'countChargePrix'=>$countChargePrix,'countRevenu'=>$countRevenu,'countRevenuPrix'=>$countRevenuPrix,'HoursTotal'=>$HoursTotal,'TravailleurTotal'=>$TravailleurTotal,'countStocke'=>$countStocke]);
    }

    public function dashboard(){
        $HoursTotal = $this->adminService->HoursTotal();
        $TravailleurTotal = $this->adminService->TravailleurTotal()+4;
        $countCharge = $this->adminService->countCharge();
        $countChargePrix = $this->adminService->countChargePrix();
        $countRevenu = $this->adminService->countRevenu();
        $countRevenuPrix = $this->adminService->countRevenuPrix();
        $countPeriode = $this->adminService->countPeriode();
        $countProduit_planter = $this->adminService->countProduit_planter();
        $countMateriauxOutil = $this->adminService->countMateriauxOutil();
        $countStocke = $this->adminService->countStocke();
        return view('admin.admin-dashboard',['TravailleurTotal'=>$TravailleurTotal,'HoursTotal'=>$HoursTotal,'countCharge'=>$countCharge,'countChargePrix'=>$countChargePrix,'countRevenu'=>$countRevenu,'countRevenuPrix'=>$countRevenuPrix,'countPeriode'=>$countPeriode,'countProduit_planter'=>$countProduit_planter,'countMateriauxOutil'=>$countMateriauxOutil,'countStocke'=>$countStocke]);
    }




    // ___________________________message_________________________

    public function messageFinanciereView(){
        return view('admin.message-financiere');
    }
    
    public function messageFinanciere(){
        $messages = $this->adminService->adminFinanciereMessage();
        
        return response()->json(['messages' => $messages]);
    }
    
    
    public function messagePlannerView(){
        
        return view('admin.message-planner');
    }

    public function messagePlanner(){
        $messages = $this->adminService->adminPlannerMessage();
        
        return response()->json(['messages' => $messages]);
    }

    
    public function messageStockisteView(){
      
        return view('admin.message-stockiste');
    }

    public function messageStockiste(){
        $messages = $this->adminService->adminStockisteMessage();
        
        return response()->json(['messages' => $messages]);
    }

    // ____________________create message_____________________
    
    public function message(Request $request){
        $data = $request->validate([
            'sender' => 'required',
            
            'recipient' => 'required',
            
            'content' => 'required'
        ]);
         $this->adminService->createMessage($data);
      
    }
}