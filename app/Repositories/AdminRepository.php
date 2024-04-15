<?php

namespace App\Repositories;

use App\Models\Financiere;
use App\Models\HeureTrevailler;
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

  // ____________add-hours_____________

  public function createHoursFinanciere(array $data)
  {
      return HeureTrevailler::create($data);
  }

  public function createHoursPlanner(array $data)
  {
      return HeureTrevailler::create($data);
  }

  public function createHoursStockiste(array $data)
  {
      return HeureTrevailler::create($data);
  }

  public function createHoursPublicitaire(array $data)
  {
      return HeureTrevailler::create($data);
  }

  public function createHoursTravailleur(array $data)
  {
      return HeureTrevailler::create($data);
  }

//   _________________get hours___________________

public function financiereHours($id)
{
    return HeureTrevailler::all()->where('financiere_id',$id);
}

public function plannerHours($id)
{
    return HeureTrevailler::all()->where('planner_id',$id);
}

public function stockisteHours($id)
{
    return HeureTrevailler::all()->where('stockiste_id',$id);
}

public function publicitaireHours($id)
{
    return HeureTrevailler::all()->where('publicitaire_id',$id);
}

public function travailleurHours($id)
{
    return HeureTrevailler::all()->where('travailleur_id',$id);
}

// ____________________sum heure travailler________________

public function financiereHoursTotal()
{
    return HeureTrevailler::whereNotNull('financiere_id')->sum('heurs');
}

public function plannerHoursTotal()
{
    return HeureTrevailler::whereNotNull('planner_id' )->sum('heurs');
}

public function stockisteHoursTotal()
{
    return HeureTrevailler::whereNotNull('stockiste_id' )->sum('heurs');
}

public function publicitaireHoursTotal()
{
    return HeureTrevailler::whereNotNull('publicitaire_id' )->sum('heurs');
}

public function travailleurHoursTotal()
{
    return HeureTrevailler::whereNotNull('travailleur_id')
        ->groupBy('travailleur_id')
        ->selectRaw('travailleur_id, sum(heurs) as total_heurs')
        ->pluck('total_heurs', 'travailleur_id');
}

// ______________________get user first________________
 
    public function getFirstFinanciere(){
        return  Financiere::all()->first();
    }

    public function getFirstPlanner(){
        return  Planner::all()->first();
    }

    public function getFirstStockiste(){
        return  Stockiste::all()->first();
    }

    public function getFirstPublicitaire(){
        return  Publicitaire::all()->first();
    }


}