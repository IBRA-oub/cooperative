<?php

namespace App\Services;

use App\Repositories\FinanciereRepositoryInterface;

class FinanciereService
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
}