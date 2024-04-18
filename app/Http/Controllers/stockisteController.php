<?php

namespace App\Http\Controllers;

use App\Services\StockisteServiceInterface;
use Illuminate\Http\Request;

class stockisteController extends Controller
{
    protected $stockisterService;
    public function __construct( StockisteServiceInterface $stockisterService )
     {
        $this->stockisterService = $stockisterService;
    }

    // _______________________________________________


    public function addProduitStockePost(Request $request){
        $data = $request->validate([
            'nomProduit' => 'required',
            'quantiterProduit' => 'required'
        ]);
        $this->stockisterService->create($data);
        
        return redirect()->route('stockiste-dashboard')->with('success','produit en stocke ajouter avec success');
    }
    public function ProduitStockeDelete($id){
        $this->stockisterService->delete($id);
        return redirect()->route('stockiste-dashboard')->with('success','produit en stocke supprimer avec success');
    }
    public function dashboard(){
        $produits = $this->stockisterService->redAll(); 
        
        return view('stockiste.stockiste-dashboard',['produits' => $produits ]);
    }

    public function editProduitStocke($id){
        $produit = $this->stockisterService->find($id);
        return view('stockiste.edit-produit-stocke',['produit' => $produit]);
    }
    public function updateProduitStocke(Request $request,$id){
        $data = $request->validate([
            'nomProduit' => 'required',
            'quantiterProduit' => 'required'
        ]);
        $this->stockisterService->update($data,$id);
        
        return redirect()->route('stockiste-dashboard')->with('success',' mise a jour avec success');
    }
    public function infoStati(){
        $count = $this->stockisterService->count(); 
        return view('stockiste.info-stati',['count' => $count]);
    }
    // ________________________________________________
   
    public function message(){
        return view('stockiste.message');
    }
   
}