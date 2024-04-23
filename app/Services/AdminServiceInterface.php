<?php

namespace App\Services;

interface AdminServiceInterface
{
    public function create(array $data);
    public function createFinanciere(array $data);
    public function createPlanner(array $data);
    public function createStockiste(array $data);
    public function createTravailleur(array $data);
    public function allUser();
    public function update(array $data,$id);
    public function updateFinanciere(array $data);
    public function updatePlanner(array $data);
    public function updateStockiste(array $data);
    public function updateTravailleur(array $data);
    public function editeUser($id);
    public function delete($id);
    public function createHoursFinanciere(array $data);
    public function createHoursPlanner(array $data);
    public function createHoursStockiste(array $data);
    public function createHoursTravailleur(array $data);
    public function financiereHours($id);
    public function plannerHours($id);
    public function stockisteHours($id);
    public function travailleurHours($id);
    public function financiereHoursTotal();
    public function plannerHoursTotal();
    public function stockisteHoursTotal();
    public function travailleurHoursTotal();
    public function getFirstFinanciere();
    public function getFirstPlanner();
    public function getFirstStockiste();
    public function storePubliciter(array $data);
    public function redPubliciter();
    public function deletePubliciter($id);
    public function findPubliciter($id);
    public function updatePubliciter(array $data,$id);
    public function redLastPubliciter();
    public function redPeriodes();
    public function countCharge();
    public function countChargePrix();
    public function countRevenu();
    public function countRevenuPrix();
    public function HoursTotal();
    public function TravailleurTotal();
    public function countPeriode();
    public function countProduit_planter();
    public function countMateriauxOutil();
    public function countStocke();
    public function financiereHoursPdf();
    public function plannerHoursPdf();
    public function stockisteHoursPdf();
    public function createMessage(array $data);
    public function adminFinanciereMessage();
    public function adminPlannerMessage();
    public function adminStockisteMessage();
}