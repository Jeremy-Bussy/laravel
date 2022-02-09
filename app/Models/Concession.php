<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concession
{
    protected $garage = [];
    protected $nom;
    function __construct($nomConcession){
        $this->nom = $nomConcession;
    }
    
    public function addToConcession($voiture){
        // dd($voiture);
        array_push($this->garage, $voiture);
    }

    public function getConcession(){
        return json_encode($this->garage);
    }

    public function getName(){
        return $this->nom;
    }

    public function getIterateur(){
        return new Aggregation($this->garage);

    }
}