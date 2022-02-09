<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Renault extends Voiture
{
    public $marque;
    public $prix;
    
    function __construct(){
        $this->marque = "renault";
        $this->prix = 2000;
    }

    function getMarque(){
        return $this->marque;
    }
}