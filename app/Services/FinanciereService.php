<?php

namespace App\Services;

use App\Repositories\FinanciereRepositoryInterface;

class FinanciereService
{
    public function __construct(
        protected FinanciereRepositoryInterface $financiereRepository
    ) {
    }

    public function allMateriel()
    {
        return $this->financiereRepository->allMateriel();
    }
    public function createMateriel(array $data)
    {
        $data['type_id']= 1;
        return $this->financiereRepository->store($data);
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