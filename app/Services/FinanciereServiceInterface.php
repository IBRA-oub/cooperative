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
    public function createMateriaux(array $data);
    public function allMateriaux();
    public function find($id);
    public function update(array $data ,$id);
    public function delete($id);

    // _________________revenu______________

    public function createRevenu(array $data);
}