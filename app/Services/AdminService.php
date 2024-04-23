<?php

namespace App\Services;

use App\Repositories\AdminRepositoryInterface;

class AdminService implements AdminServiceInterface
{
    public function __construct( protected AdminRepositoryInterface $adminRepository) 
    {
    }

    // _______________create_______________
    public function create(array $data)
    {
        return $this->adminRepository->create($data);
    }

    public function createFinanciere(array $data){

        return $this->adminRepository->createFinanciere($data);
    }
    public function createPlanner(array $data){

        return $this->adminRepository->createPlanner($data);
    }
    public function createStockiste(array $data){

        return $this->adminRepository->createStockiste($data);
    }
    public function createTravailleur(array $data){

        return $this->adminRepository->createTravailleur($data);
    }

     // ______________red user____________


     public function allUser(){

        return $this->adminRepository->allUser();
    }
        // ____________updated ______________

        public function update(array $data,$id){

            return $this->adminRepository->update($data,$id);
        }

        public function updateFinanciere(array $data){

            return $this->adminRepository->updateFinanciere($data);
        }
        public function updatePlanner(array $data){

            return $this->adminRepository->updatePlanner($data);
        }
        public function updateStockiste(array $data){

            return $this->adminRepository->updateStockiste($data);
        }
        public function updateTravailleur(array $data){

            return $this->adminRepository->updateTravailleur($data);
        }
        // ___________edite_____________

        public function editeUser($id){

            return $this->adminRepository->editeUser($id);
        }

         // ___________delete_____________

         public function delete($id){

            return $this->adminRepository->delete($id);
        }

        // ____________add-hours_____________

        public function createHoursFinanciere(array $data){

            return $this->adminRepository->createHoursFinanciere($data);
        }
        public function createHoursPlanner(array $data){

            return $this->adminRepository->createHoursPlanner($data);
        }
        public function createHoursStockiste(array $data){

            return $this->adminRepository->createHoursStockiste($data);
        }
        public function createHoursTravailleur(array $data){

            return $this->adminRepository->createHoursTravailleur($data);
        }

        //   _________________get hours___________________

        public function financiereHours($id){

            return $this->adminRepository->financiereHours($id);
        }
        public function plannerHours($id){

            return $this->adminRepository->plannerHours($id);
        }
        public function stockisteHours($id){

            return $this->adminRepository->stockisteHours($id);
        }
        public function travailleurHours($id){

            return $this->adminRepository->travailleurHours($id);
        }
       

        // ____________________sum heure travailler________________
        public function financiereHoursTotal(){

            return $this->adminRepository->financiereHoursTotal();
        }
        public function plannerHoursTotal(){

            return $this->adminRepository->plannerHoursTotal();
        }
        public function stockisteHoursTotal(){

            return $this->adminRepository->stockisteHoursTotal();
        }
        public function travailleurHoursTotal(){

            return $this->adminRepository->travailleurHoursTotal();
        }

        // ______________________get user first________________
        public function getFirstFinanciere(){

            return $this->adminRepository->getFirstFinanciere();
        }
        public function getFirstPlanner(){

            return $this->adminRepository->getFirstPlanner();
        }
        public function getFirstStockiste(){

            return $this->adminRepository->getFirstStockiste();
        }
       
         // _______________________publiciter_________________

         public function storePubliciter(array $data){

            return $this->adminRepository->storePubliciter($data);
        }
        public function redPubliciter(){

            return $this->adminRepository->redPubliciter();
        }
        public function deletePubliciter($id){

            return $this->adminRepository->deletePubliciter($id);
        }
        public function findPubliciter($id){

            return $this->adminRepository->findPubliciter($id);
        }

        public function updatePubliciter(array $data,$id){

            return $this->adminRepository->updatePubliciter($data,$id);
        }

            // ________________les deux dernier publiciter avec affichage des periode dans home page_______________

            public function redLastPubliciter(){

                return $this->adminRepository->redLastPubliciter();
            }
            public function redPeriodes(){

                return $this->adminRepository->redPeriodes();
            }
            // ______________________les statistique_______________
   

        // ____________totale de charge_______
        public function countCharge(){

            return $this->adminRepository->countCharge();
        }
        public function countChargePrix(){

            return $this->adminRepository->countChargePrix();
        }
        public function countRevenu(){

            return $this->adminRepository->countRevenu();
        }

        public function countRevenuPrix(){

            return $this->adminRepository->countRevenuPrix();
        }
        public function HoursTotal(){

            return $this->adminRepository->HoursTotal();
        }
        public function TravailleurTotal(){

            return $this->adminRepository->TravailleurTotal();
        }
        public function countPeriode(){

            return $this->adminRepository->countPeriode();
        }
        public function countProduit_planter(){

            return $this->adminRepository->countProduit_planter();
        }
        public function countMateriauxOutil(){

            return $this->adminRepository->countMateriauxOutil();
        }
        public function countStocke(){

            return $this->adminRepository->countStocke();
        }

         //  _______________get hours for pdf_____________
        public function financiereHoursPdf(){

            return $this->adminRepository->financiereHoursPdf();
        }
        public function plannerHoursPdf(){

            return $this->adminRepository->plannerHoursPdf();
        }
        public function stockisteHoursPdf(){

            return $this->adminRepository->stockisteHoursPdf();
        }

        // _____________________message_____________________

        public function createMessage(array $data){

            return $this->adminRepository->createMessage( $data);
        }

        public function adminFinanciereMessage(){

            return $this->adminRepository->adminFinanciereMessage();
        }
        public function adminPlannerMessage(){

            return $this->adminRepository->adminPlannerMessage();
        }
        public function adminStockisteMessage(){

            return $this->adminRepository->adminStockisteMessage();
        }
}
