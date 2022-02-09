<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Factory;

class FactoryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){
        $opel = Factory::getInstance('Opel');
        $renault = Factory::getInstance('Renault');

        return view('factory', ['opel' => $opel, 'renault' => $renault]);
    }
}
