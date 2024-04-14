<?php

namespace App\Repositories;


use App\Models\Charge;
use App\Models\Financiere;

class FinanciereRepository implements FinanciereRepositoryInterface
{
    
    public function store(array $data){
        return Charge::create($data);
        
    }
    public function allMateriel()
    {
        return Charge::all()->where('type_id', 1);
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
        $user = Charge::findOrFail($id);
        $user->delete();
    }
}