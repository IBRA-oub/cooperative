<?php

namespace App\Services;

use App\Repositories\FinanciereRepositoryInterface;

class FinanciereService implements FinanciereServiceInterface
{
    public function __construct( protected FinanciereRepositoryInterface $financiereRepository) 
    {
    }

    // ______________materiel___________
    public function allMateriel()
    {
        return $this->financiereRepository->allMateriel();
    }
    public function createMateriel(array $data)
    {
        $data['type_id']= 1;
        return $this->financiereRepository->store($data);
    }
    // ____________________Electriciter/eau______________

    public function createElectriciterEau(array $data)
    {
        $data['type_id']= 2;
        return $this->financiereRepository->store($data);
    }

    public function allElectriciterEau()
    {
        return $this->financiereRepository->allElectriciterEau();
    }
    // ______________________location________________
    public function createLocation(array $data){
        $data['type_id']= 3;
        return $this->financiereRepository->store($data);
    }
    public function allLocation()
    {
        return $this->financiereRepository->allLocation();
    }

    // ______________________materiaux_______________

    public function createMateriaux(array $data)
    {
        $data['type_id']= 4;
        return $this->financiereRepository->store($data);
    }
    public function allMateriaux()
    {
        return $this->financiereRepository->allMateriaux();
    }
    public function find($id)
    { 
        return $this->financiereRepository->find($id);
    }

    public function update(array $data ,$id)
    { 
        return $this->financiereRepository->update($data,$id);
    }
    public function delete($id)
    { 
        return $this->financiereRepository->delete($id);
    }

    // ____________________revenu_____________________
    public function createRevenu(array $data)
    {
        
        return $this->financiereRepository->storeRevenu($data);
    }

    public function allRevenu()
    {
        return $this->financiereRepository->allRevenu();
    }

    public function deleteRevenu($id)
    { 
        return $this->financiereRepository->deleteRevenu($id);
    }

    public function findRevenu($id)
    { 
        return $this->financiereRepository->findRevenu($id);
    }

    public function updateRevenu(array $data ,$id)
    { 
        return $this->financiereRepository->updateRevenu($data,$id);
    }

    public function countRevenu()
    { 
        return $this->financiereRepository->countRevenu();
    }
    public function countCharge()
    { 
        return $this->financiereRepository->countCharge();
    }
    public function countRevenuPrix()
    { 
        return $this->financiereRepository->countRevenuPrix();
    }
    public function countChargePrix()
    { 
        return $this->financiereRepository->countChargePrix();
    }

    // ___________________message_______________

    public function createMessage(array $data)
    { 
        return $this->financiereRepository->createMessage($data);
    }
    public function FinanciereAdminMessage( )
    { 
        return $this->financiereRepository->FinanciereAdminMessage();
    }
}