<?php

namespace App\Services;

interface FinanciereServiceInterface
{
    public function allMateriel();
    public function createMateriel(array $data);
    public function createElectriciterEau(array $data);
    public function allElectriciterEau();
    public function createLocation(array $data);
    public function allLocation();
    public function find($id);
    public function update(array $data ,$id);
    public function delete($id);
}