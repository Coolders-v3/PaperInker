<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    use HasFactory;

    public function illustrator(){
        return $this->belongsTo(Illustrator::class); 
    }
}
