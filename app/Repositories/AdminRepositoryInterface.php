<?php

namespace App\Repositories;

interface AdminRepositoryInterface
{
    // ___________create ___________
    public function create(array $data);
    public function createFinanciere(array $data);
    public function createPlanner(array $data);
    public function createStockiste(array $data);
  
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
    public function updateTravailleur(array $data);

    // _______________delete______________

    public function delete($id);

    // _____________create-hours______________

    public function createHoursFinanciere(array $data);

    public function createHoursPlanner(array $data);
    public function createHoursStockiste(array $data);
    public function createHoursTravailleur(array $data);

    // _______________________get hours________________

    public function financiereHours($id);
    public function plannerHours($id);
    public function stockisteHours($id);

    public function travailleurHours($id);

    // ____________________sum heure travailler________________

    public function financiereHoursTotal();
    public function plannerHoursTotal();
    public function stockisteHoursTotal();

    

    public function travailleurHoursTotal();


    // _______________get first user_________________

    public function getFirstFinanciere();

    public function getFirstPlanner();

    public function getFirstStockiste();

    // _________________publiciter_____________
    public function storePubliciter(array $data);
    public function redPubliciter();
    public function deletePubliciter($id);
    public function findPubliciter($id);
    public function updatePubliciter(array $data, $id);
    // public function countPubliciter();

    // _____________________last publiciter et periode _______________

    
    public function redLastPubliciter();

    public function redPeriodes();

    // ____________count____________
    public function countCharge();
    public function countChargePrix();
    public function countRevenu();
    public function countRevenuPrix();
    public function HoursTotal();
    public function TravailleurTotal();
    
    
}