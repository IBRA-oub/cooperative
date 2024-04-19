<?php

namespace App\Repositories;

use App\Models\Charge;
use App\Models\Financiere;
use App\Models\HeureTrevailler;
use App\Models\MateriauxOutil;
use App\Models\Periode;
use App\Models\Planner;

use App\Models\produit_planter;
use App\Models\Publiciter;
use App\Models\Revenu;
use App\Models\Stockiste;
use App\Models\Stocks;
use App\Models\Travailleur;
use App\Models\User;
use Psy\Readline\Hoa\StreamLockable;

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


    // _______________________publiciter_________________
    

    public function storePubliciter(array $data){
        return Publiciter::create($data);
        
    }
    public function redPubliciter()
    {
        return Publiciter::all();
    }
    public function deletePubliciter($id)
    {
        $Publiciter = Publiciter::findOrFail($id);
        $Publiciter->delete();
    }

    public function findPubliciter($id)
    {
        return Publiciter::findOrFail($id);
    }

    public function updatePubliciter(array $data, $id)
    {
    $Publiciter = Publiciter::findOrFail($id);
    $Publiciter->update($data);
    return $Publiciter;
    }
    // public function countPubliciter()
    // {
    //     $count = Publiciter::count();
    //     return $count;
    // }

    // ________________les deux dernier publiciter avec affichage des periode dans home page_______________

    public function redLastPubliciter()
    {
        return Publiciter::latest()->take(2)->get();
    }
    public function redPeriodes()
    {
        return Periode::all();
    }

    // ______________________les statistique_______________
   

    // ____________totale de charge_______
    public function countCharge()
    {
        $count = Charge::count();
        return $count;
    }
    public function countChargePrix()
    {
        $count  = Charge::whereNotNull('prix')->sum('prix');
        return $count;
    }
   // ____________totale de revenu_______
   public function countRevenu()
   {
       $count = Revenu::count();
       return $count;
   }
   public function countRevenuPrix()
    {
        $count  = Revenu::whereNotNull('prixRevenuProduit')->sum('prixRevenuProduit');
        return $count;
    }

    public function HoursTotal()
{
    return HeureTrevailler::sum('heurs');
}
    public function TravailleurTotal()
{
    return Travailleur::count();
}

    public function countPeriode()
     {
         $count = Periode::count();
         return $count;
     }
    public function countProduit_planter()
     {
         $count = produit_planter::count();
         return $count;
     }
    public function countMateriauxOutil()
     {
         $count = MateriauxOutil::count();
         return $count;
     }

     public function countStocke()
     {
         $count = Stocks::count();
         return $count;
     }
    
}