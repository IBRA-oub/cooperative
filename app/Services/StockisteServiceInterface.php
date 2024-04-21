<?php

namespace App\Services;

interface StockisteServiceInterface
{
    public function create(array $data);
    public function redAll();
    public function delete($id);
    public function find($id);
    public function update(array $data ,$id);
    public function count();

      // _____________________message_________________
      public function createMessage(array $data);
      public function StockisteAdminMessage();
}