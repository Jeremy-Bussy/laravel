<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Facade;
use App\Models\Concession;



class FacadeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //1
    //créer voiture (identique a Factory.php)

    public function commander(){
        $nomConcession = 'EuroMaster';
        $facade = Facade::commander($nomConcession);
        return view('facade', ['voiture' => $facade['voiture'], 'concession' => $facade[$nomConcession], 'nomConcession' => $nomConcession, 'facture' =>$facade['facture']]);
    }
}
