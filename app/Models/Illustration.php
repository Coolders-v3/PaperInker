<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'illustrations';

    protected $fillable = ['jobGenre','title','jobIllustration','yearOfCreation','illustrator_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function illustrator()
    {
        return $this->belongsTo(Illustrator::class); 
    }
    
}
