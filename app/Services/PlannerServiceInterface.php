<?php

namespace App\Services;

interface PlannerServiceInterface
{
    public function createPeriode(array $data);
    public function redAllPeriode();
    public function deletePeriode($id);
    public function findPeriode($id);
    public function updatePeriode(array $data ,$id);
    // ______________produit______________
    public function createProduit(array $data);
    public function redAllProduit();
    public function deleteProduit($id);
    public function findProduit($id);
    public function updateProduit(array $data ,$id);
    // materiauxOutils
    public function createMateraiuxOutils(array $data);
    public function redAllMateraiuxOutils();
    public function deleteMateraiuxOutils($id);
    public function findMateraiuxOutils($id);
    public function updateMateraiuxOutils(array $data ,$id);
    // ___________________count_________________
    public function countPeriode();
    public function countProduit_planter();
    public function countMateriauxOutil();
}