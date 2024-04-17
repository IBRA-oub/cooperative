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

    public function allRevenu();
    public function deleteRevenu($id);
    public function findRevenu($id);
    public function updateRevenu(array $data, $id);

    public function countCharge();
    public function countRevenu();
    public function countChargePrix();
    public function countRevenuPrix();
}