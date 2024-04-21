<?php

namespace App\Repositories;
use App\Models\Message;
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
    
     // _______________________message_______________

     public function createMessage(array $data)
     {
         return Message::create($data);
     }
 
     public function StockisteAdminMessage()
     {
         return Message::where(function ($query) {
             $query->where('sender', 'admin')
                 ->orWhere('recipient', 'admin');
         })
         ->where(function ($query) {
             $query->where('recipient', 'stockiste')
                 ->orWhere('sender', 'stockiste');
         })
         ->get();
     }
}