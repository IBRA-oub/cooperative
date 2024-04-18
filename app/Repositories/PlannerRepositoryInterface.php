<?php

namespace App\Repositories;

interface PlannerRepositoryInterface
{
    public function store(array $data);
    public function red();
    public function delete($id);
    public function find($id);
    public function update(array $data, $id);
    // ______________produit a planter________________
    public function storeProduit(array $data);
    public function redProduit();
    public function deleteProduit($id);
    public function findProduit($id);
    public function updateProduit(array $data, $id);
    
    // ________________materiauxOutils_______________
    public function redMateraiuxOutils();
    public function storeMateraiuxOutils(array $data);
    public function deleteMateraiuxOutils($id);
    public function findMateraiuxOutils($id);
    public function updateMateraiuxOutils(array $data, $id);
}