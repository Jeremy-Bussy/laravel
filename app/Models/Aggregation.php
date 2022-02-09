<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aggregation
{
    public $listeVoiture = [];
    public $offset = 0;

    public function __construct($tabvoiture){
        $this->listeVoiture = $tabvoiture;
    }

    public function hasnext(){
        return isset($listeVoiture[$this->offset]);
    }

    public function next(){
        return $listeVoiture[$this->offset++];
    } 
}