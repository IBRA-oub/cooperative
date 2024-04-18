<?php

namespace App\Services;

use App\Repositories\PlannerRepositoryInterface;

class PlannerService implements PlannerServiceInterface
{
    public function __construct( protected PlannerRepositoryInterface $plannerRepository) 
    {
    }

    public function createPeriode(array $data){
        $data['planner_id'] = auth()->user()->planner->id;
        return $this->plannerRepository->store($data);
    }
    public function redAllPeriode(){
       
        return $this->plannerRepository->red();
    }

    public function deletePeriode($id){
       
        return $this->plannerRepository->delete($id);
    }

    public function findPeriode($id)
    { 
        return $this->plannerRepository->find($id);
    }

    public function updatePeriode(array $data ,$id)
    { 
        return $this->plannerRepository->update($data,$id);
    }

    // _______________________produit_______________

    public function createProduit(array $data){
        
        return $this->plannerRepository->storeProduit($data);
    }
    public function redAllProduit(){
       
        return $this->plannerRepository->redProduit();
    }

    public function deleteProduit($id){
       
        return $this->plannerRepository->deleteProduit($id);
    }

    public function findProduit($id)
    { 
        return $this->plannerRepository->findProduit($id);
    }

    public function updateProduit(array $data ,$id)
    { 
        return $this->plannerRepository->updateProduit($data,$id);
    }
    // ___________________________materiauxOutils__________________
    public function createMateraiuxOutils(array $data){
        
        return $this->plannerRepository->storeMateraiuxOutils($data);
    }
    public function redAllMateraiuxOutils(){
       
        return $this->plannerRepository->redMateraiuxOutils();
    }

    public function deleteMateraiuxOutils($id){
       
        return $this->plannerRepository->deleteMateraiuxOutils($id);
    }

    public function findMateraiuxOutils($id)
    { 
        return $this->plannerRepository->findMateraiuxOutils($id);
    }

    public function updateMateraiuxOutils(array $data ,$id)
    { 
        return $this->plannerRepository->updateMateraiuxOutils($data,$id);
    }
    // _____________________count_____________
    public function countPeriode()
    { 
        return $this->plannerRepository->countPeriode();
    }
    public function countProduit_planter()
    { 
        return $this->plannerRepository->countProduit_planter();
    }
    public function countMateriauxOutil()
    { 
        return $this->plannerRepository->countMateriauxOutil();
    }
}