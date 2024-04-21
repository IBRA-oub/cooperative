<?php

namespace App\Repositories;

interface StockisteRepositoryInterface
{
    public function store(array $data);
    public function red();
    public function delete($id);
    public function find($id);
    public function update(array $data, $id);
    public function count();

     // __________________message________________
     public function createMessage(array $data);
     public function StockisteAdminMessage();
}