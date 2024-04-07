<?php

namespace App\Repositories;

interface AdminRepositoryInterface
{
    public function getByID($id);
    public function create(array $data);
    public function createFinanciere(array $data);
}