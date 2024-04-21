<?php

namespace App\Repositories;
use App\Models\MateriauxOutil;
use App\Models\Message;
use App\Models\Periode;
use App\Models\produit_planter;



class PlannerRepository implements PlannerRepositoryInterface
{
    public function store(array $data){
        return Periode::create($data);
        
    }
    public function red()
    {
        return Periode::all();
    }
    public function delete($id)
    {
        $periode = Periode::findOrFail($id);
        $periode->delete();
    }

    public function find($id)
    {
        return Periode::findOrFail($id);
    }

    public function update(array $data, $id)
    {
    $periode = Periode::findOrFail($id);
    $periode->update($data);
    return $periode;
    }

    // ______________produit a plnter______________
    public function storeProduit(array $data){
        return produit_planter::create($data);
        
    }
    public function redProduit()
    {
        return produit_planter::all();
    }
    public function deleteProduit($id)
    {
        $produit_planter = produit_planter::findOrFail($id);
        $produit_planter->delete();
    }

    public function findProduit($id)
    {
        return produit_planter::findOrFail($id);
    }

    public function updateProduit(array $data, $id)
    {
    $produitPlanter = produit_planter::findOrFail($id);
    $produitPlanter->update($data);
    return $produitPlanter;
    }

    // _________________________materiauxOutils__________________

    public function storeMateraiuxOutils(array $data){
        return MateriauxOutil::create($data);
        
    }
    public function redMateraiuxOutils()
    {
       
        
        return MateriauxOutil::all();
    }
    public function deleteMateraiuxOutils($id)
    {
        $MateriauxOutil = MateriauxOutil::findOrFail($id);
        $MateriauxOutil->delete();
    }

    public function findMateraiuxOutils($id)
    {
        return MateriauxOutil::findOrFail($id);
    }

    public function updateMateraiuxOutils(array $data, $id)
    {
    $MateraiuxOutils = MateriauxOutil::findOrFail($id);
    $MateraiuxOutils->update($data);
    return $MateraiuxOutils;
    }
    // _________________count__________________
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

      // _______________________message_______________

    public function createMessage(array $data)
    {
        return Message::create($data);
    }

    public function PlannerAdminMessage()
    {
        return Message::where(function ($query) {
            $query->where('sender', 'admin')
                ->orWhere('recipient', 'admin');
        })
        ->where(function ($query) {
            $query->where('recipient', 'planner')
                ->orWhere('sender', 'planner');
        })
        ->get();
    }
}