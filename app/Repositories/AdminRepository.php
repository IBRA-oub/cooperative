<?php

namespace App\Repositories;

use App\Models\Financiere;
use App\Models\User;

class AdminRepository implements AdminRepositoryInterface
{


    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
    public function getByID($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function createFinanciere(array $data)
    {
        return Financiere::create($data);
    }
}