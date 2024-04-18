<?php

namespace App\Services;

use App\Repositories\StockisteRepositoryInterface;

class StockisteService implements StockisteServiceInterface
{
    public function __construct( protected StockisteRepositoryInterface $stockisteRepository) 
    {
    }

    public function create(array $data){
        $data['stockist_id'] = auth()->user()->stockiste->id;
        return $this->stockisteRepository->store($data);
    }
    public function redAll(){
       
        return $this->stockisteRepository->red();
    }

    public function delete($id){
       
        return $this->stockisteRepository->delete($id);
    }

    public function find($id)
    { 
        return $this->stockisteRepository->find($id);
    }

    public function update(array $data ,$id)
    { 
        return $this->stockisteRepository->update($data,$id);
    }
    public function count()
    { 
        return $this->stockisteRepository->count();
    }
}