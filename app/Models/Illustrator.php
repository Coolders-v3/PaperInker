<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Illustrator extends User
{
    use HasFactory;

    public function writers (){
        return $this->belongsToMany(Writer::class); 
    }
}
