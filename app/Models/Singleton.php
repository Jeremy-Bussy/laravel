<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Singleton
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $count;

    private static $instance = null;

    private function __construct(){
       $this->count=0;
    }

    public function getInstance(){
        if(self::$instance === null){
            self::$instance = new Singleton;
        }
        return self::$instance;
    }

    public function increment(){
        return $this->count++;
    }
}


?>