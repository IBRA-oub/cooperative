<?php

namespace App\Repositories;


use App\Models\Charge;
use App\Models\Financiere;
use App\Models\Revenu;

class FinanciereRepository implements FinanciereRepositoryInterface
{
    
    public function store(array $data){
        return Charge::create($data);
        
    }
    public function allMateriel()
    {
        return Charge::all()->where('type_id', 1);
    }

    public function allElectriciterEau()
    {
        return Charge::all()->where('type_id', 2);
    }
    public function allLocation()
    {
        return Charge::all()->where('type_id', 3);
    }
    public function allMateriaux()
    {
        return Charge::all()->where('type_id', 4);
    }

    public function find($id)
    {
        return Charge::findOrFail($id);
    }

    public function update(array $data, $id)
    {
    $charge = Charge::findOrFail($id);
    $charge->update($data);
    return $charge;
    }
    public function delete($id)
    {
        $charge = Charge::findOrFail($id);
        $charge->delete();
    }
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
    // ___________revenu_____________
    public function storeRevenu(array $data){
        return Revenu::create($data);
        
    }

    public function allRevenu()
    {
        return Revenu::all();
    }

    public function deleteRevenu($id)
    {
        $charge = Revenu::findOrFail($id);
        $charge->delete();
    }

    public function findRevenu($id)
    {
        return Revenu::findOrFail($id);
    }

    public function updateRevenu(array $data, $id)
    {
    $charge = Revenu::findOrFail($id);
    $charge->update($data);
    return $charge;
    }
}