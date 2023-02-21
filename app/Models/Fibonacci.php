<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Logging
use Illuminate\Support\Facades\Log;

class Fibonacci extends Model
{
    use HasFactory;

    private $memo = array();
    
    public function __construct() {
        $this->memo[0] = 0;
        $this->memo[1] = 1;
        for ($i = 2; $i < 10; $i++) {
            $this->memo[$i] = $this->fibonacci($i-1) + $this->fibonacci($i-2);
        }
        Log::info('Fibonacci initialized: ' . implode(",", $this->memo));
    }
    
    public function fibonacci($n) {
        if ($n < 0){
            return null;
        }
        
        if ($n === 0 || $n === 1){
            return $n;
        }
        
        if (array_key_exists($n, $this->memo)){
            return $this->memo[$n];
        }
        
        $this->memo[$n] = $this->fibonacci($n-1) + $this->fibonacci($n-2);
        return $this->memo[$n];
    }

    public function imprimirSecuencia(){
        foreach ($this->memo as $key => $value) {
            echo "$key: $value\n";
        }
        Log::info('Fibonacci sequence: ' . implode(",", $this->memo));
    }
}

