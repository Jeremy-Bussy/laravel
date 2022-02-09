<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opel extends Voiture
{
    public $marque;
    public $prix;
    
    function __construct(){
        $this->marque = "opel";
        $this->prix = 30000;
    }

    function getMarque(){
        return $this->marque;
    }
}