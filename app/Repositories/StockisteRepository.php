<?php

namespace App\Repositories;
use App\Models\Stocks;




class StockisteRepository implements StockisteRepositoryInterface
{
    public function store(array $data){
        return Stocks::create($data);
        
    }
    public function red()
    {
        return Stocks::all();
    }
    public function delete($id)
    {
        $Stocks = Stocks::findOrFail($id);
        $Stocks->delete();
    }

    public function find($id)
    {
        return Stocks::findOrFail($id);
    }

    public function update(array $data, $id)
    {
    $Stocks = Stocks::findOrFail($id);
    $Stocks->update($data);
    return $Stocks;
    }
    public function count()
    {
        $count = Stocks::count();
        return $count;
    }
}