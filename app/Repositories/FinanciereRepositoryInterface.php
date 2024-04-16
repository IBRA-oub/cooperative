<?php

namespace App\Repositories;

interface FinanciereRepositoryInterface
{
    public function store(array $data);
    public function allMateriel();

    public function allElectriciterEau();
    public function allLocation();
    public function allMateriaux();
    public function find($id);
    public function update(array $data, $id);
    public function delete($id);
    
    // __________________revenu____________

    public function storeRevenu(array $data);
}