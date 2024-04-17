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
}