<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Illustrator extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];
    
    public function writers (){
        return $this->belongsToMany(Writer::class); 
    }

    public function illustrations (){
        return $this->hasMany(Illustration::class); 
    }
    public function user (){
        return $this->belongsTo(User::class); 
    }

}
