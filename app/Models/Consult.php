<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;
    protected $table = 'consults';

    public function animal(){
        return $this->belongsTo(Animal::class);
    }

    public function worker(){
        return $this->belongsTo(Workers::class);
    }
    
}
