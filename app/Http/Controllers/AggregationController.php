<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Facade;
use App\Models\Concession;



class AggregationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function aggregation(){
        $nomConcession = 'EuroMaster';
        $facade = Facade::commander($nomConcession);
        $listeVoitures = $facade[$nomConcession]->getIterateur();
        // dd($listeVoitures);
        // return view('aggregation', ['tabVoitures' => $listeVoitures ]);
        return json_encode($listeVoitures);
    }
}
