<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Factory;
use App\Models\Facture;

class Facade
{
    public static function commander($nomConcession){
        $voiture = Factory::getInstance('Opel');
        $voiture2 = Factory::getInstance('Renault');
        $concession = new Concession($nomConcession);
        $facture = new facture();
        $concession->addToConcession($voiture);
        $concession->addToConcession($voiture2);
        $facture->addToFacture($voiture);
        $facture->addToFacture($voiture2);
        // dd($voiture2);
        $tab['voiture']=$voiture2;
        $tab[$concession->getName()]=$concession;
        $tab['facture']=$facture;
        
        return $tab;
    }

        

}