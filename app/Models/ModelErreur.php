<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelErreur extends Voiture
{
    protected $object;
    
    function __construct(){
        $this->object = "Modele inconnu";
    }

    function getMarque(){
        return "La marque est inconnu";
    }
}