<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'genre',
    'year',
    'description'
  ];

  public function writer(){
      return $this->belongsTo(Writer::class); 
  }
}
