<?php

namespace App\Repositories;
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
}