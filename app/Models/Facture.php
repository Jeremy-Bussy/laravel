<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture
{

    protected $facture = ['Total' => 0, 'Detail' => []];
    
    public function addToFacture($voiture){
        array_push($this->facture['Detail'], $voiture);
        $this->facture['Total']+= $voiture->prix;
    }

    public function getFacture(){
        return json_encode($this->facture);
    }
}