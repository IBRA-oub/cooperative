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



    public function show($id)
    {
        $user = $this->adminRepository->getByID($id);

    }
    public function addUser(Request $request)
    {

        $validatedUserData = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'picture' => 'required|string'
        ]);
    
        
        $user = $this->adminRepository->create($validatedUserData);  
        $userId = $user->id;
    
        if ($request->role === 'financiere') {
           
            $validatedFinancialData = $request->validate([
                'salaire' => 'required|integer',
                
            ]);
    
            
            $validatedFinancialData['user_id'] = $userId;
            
            $this->adminRepository->createFinanciere($validatedFinancialData);
            
            return view('admin.travailleur')->with('success','Financiere ajouter avec success');
        }
        
    }
   

    
    
    public function dashboard(){
        return view('admin.admin-dashboard');
    }
    public function travailleur(){
        return view('admin.travailleur');
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
    public function editUser(){
        return view('admin.edit-user');
    }


   
}