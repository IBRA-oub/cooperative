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
}