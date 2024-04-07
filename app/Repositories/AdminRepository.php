<?php

namespace App\Repositories;

use App\Models\Financiere;
use App\Models\Planner;
use App\Models\Publicitaire;
use App\Models\Stockiste;
use App\Models\Travailleur;
use App\Models\User;

class AdminRepository implements AdminRepositoryInterface
{


    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
   
    // _________created___________

    public function create(array $data)
    {
        return User::create($data);
    }

    public function createFinanciere(array $data)
    {
        return Financiere::create($data);
    }

    public function createPlanner(array $data)
    {
        return Planner::create($data);
    }


    public function createStockiste(array $data)
    {
        return Stockiste::create($data);
    }


    public function createPublicitaire(array $data)
    {
        return Publicitaire::create($data);
    }

    public function createTravailleur(array $data)
    {
        return Travailleur::create($data);
    }

    // ______________red user____________

    public function allUser()
    {
        return User::all();
    }

    // ____________updated ______________

    public function update(array $data, $id)
    {
    $user = User::findOrFail($id);
    $user->update($data);
    return $user;
    }

    public function updateFinanciere(array $data)
    {
    $financiere = Financiere::where('user_id', $data['user_id'])->first();
    $financiere->update($data);
    return $financiere;
    }

    public function updatePlanner(array $data)
    {
    $planner = Planner::update($data);
    return $planner;
    }

    public function updateStockiste(array $data)
    {
    $stockiste = Stockiste::update($data);
    return $stockiste;
    }

    public function updatePublicitaire(array $data)
    {
    $publicitaire = Publicitaire::update($data);
    return $publicitaire;
    }

    public function updateTravailleur(array $data)
    {
    $travailleur = Travailleur::update($data);
    return $travailleur;
    }

    // ___________edite_____________

    public function editeUser($id)
    { 
    return User::findOrFail($id);
    }

    // ___________delete_____________

    
public function delete($id)
{
    $inventory = User::findOrFail($id);
    $inventory->delete();
}
}