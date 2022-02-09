<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Strategie
{
    protected $voiture;
    protected $tva;
    public function __construct(){
    }
    
    public function factureLine($voiture){
        // dd($voiture);
        if($voiture->getMarque() == "renault"){
            $this->tva = 10;
        }
        elseif($voiture->getMarque() == "opel"){
            $this->tva = 20;
        }
        else{
            $this->tva = false;
        }
    }

    public function getFactureLine(){
        return $this->tva;
    }
}