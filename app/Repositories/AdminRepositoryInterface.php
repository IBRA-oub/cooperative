<?php

namespace App\Repositories;

interface AdminRepositoryInterface
{
    // ___________create ___________
    public function create(array $data);
    public function createFinanciere(array $data);
    public function createPlanner(array $data);
    public function createStockiste(array $data);
    public function createPublicitaire(array $data);
    public function createTravailleur(array $data);

    // _______________red all ______________

    public function allUser();

    // ___________edite______________

    public function editeUser($id);

    // _____________update_______________

    public function update(array $data,$id);
    public function updateFinanciere(array $data);
    public function updatePlanner(array $data);
    public function updateStockiste(array $data);
    public function updatePublicitaire(array $data);
    public function updateTravailleur(array $data);

    // _______________delete______________

    public function delete($id);

    // _____________create-hours______________

    public function createHoursFinanciere(array $data);

    public function createHoursPlanner(array $data);
    public function createHoursStockiste(array $data);
    public function createHoursPublicitaire(array $data);
    public function createHoursTravailleur(array $data);

    // _______________________get hours________________

    public function financiereHours($id);
    public function plannerHours($id);
    public function stockisteHours($id);
    public function publicitaireHours($id);
    public function travailleurHours($id);

    
}