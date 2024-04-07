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
}