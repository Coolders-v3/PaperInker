<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];
    public function user (){
        return $this->belongsTo(User::class); 
    }
   
    public function illustrators (){
        return $this->belongsToMany(Illustrator::class); 
    }

    public function texts (){
        return $this->hasMany(Text::class); 
    }
}
