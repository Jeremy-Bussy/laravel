<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Strategie;
use App\Models\Factory;

class StrategieController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){
        $opel = Factory::getInstance('Opel');
        $renault = Factory::getInstance('Renault');
        
        $factureLineOpel = new Strategie ();
        $factureLineRenault = new Strategie();

        $factureLineOpel->FactureLine($opel);
        $factureLineRenault->FactureLine($renault);

        return view('strategie', ['opel' => $factureLineOpel->getFactureLine(), 'renault' => $factureLineRenault->getFactureLine()]);
    }
}
