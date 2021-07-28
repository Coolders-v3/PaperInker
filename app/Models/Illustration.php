<?php 

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'illustrations';

    protected $fillable = [
        'genre',
        'title',
        'description',
        'year',
        'user_id'];
	
    
    
    /* public function illustrator()
    {
        return $this->belongsTo(Illustrator::class); 
    } */
    /**
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
