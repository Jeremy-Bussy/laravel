<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factory
{
    public static function getInstance($marque){
        
        if ($marque == 'Opel' || $marque == 'opel'){
            return new Opel;
        }
        elseif ($marque == 'Renault' || $marque == 'renault'){
            return new Renault;
        }
        return new ModelErreur;
    }

    // function getClass($object){

    // }
}