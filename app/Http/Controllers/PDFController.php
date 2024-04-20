<?php

namespace App\Http\Controllers;

use App\Repositories\AdminRepositoryInterface;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{

    protected $adminRepository;

    public function __construct(AdminRepositoryInterface $AdminRepository)
    {
        $this->adminRepository = $AdminRepository;
    }
    public function totaleHeurs($type){
        if($type == 'financiere'){
            $allData = $this->adminRepository->financiereHoursPdf(); 
        }else if($type == 'planner'){
            $allData = $this->adminRepository->plannerHoursPdf(); 
        }else if($type == 'stockiste'){
            $allData = $this->adminRepository->stockisteHoursPdf(); 
        }

        
        $data = [
            'title' => 'Bienvenu sur One hand ',
            'date' => date('m/d/Y'),
            'allData' => $allData
        ];

        // return view('admin.totale-heurs-pdf', ['data'=>$data]);
        $pdf = PDF::loadView('admin.totale-heurs-pdf', ['data'=>$data]);

        
        // for view first
       return $pdf->stream();
     
        // for download  derect
        // return $pdf->download('OneHand.pdf');
        
       
    }
   
}