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
    
    public function allRevenu();
    public function deleteRevenu($id);
    public function findRevenu($id);
    public function updateRevenu(array $data ,$id);
    public function countRevenu();
    public function countCharge();
    public function countChargePrix();
    public function countRevenuPrix();

    // _____________________message_________________
    public function createMessage(array $data);
    public function FinanciereAdminMessage();
    
}