<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
	use HasFactory;
	

    public $timestamps = true;

    protected $table = 'texts';

    protected $fillable = [
        'genre',
        'title',
        'description',
        'year',
        'user_id'
    ];


public function user(){
        return $this->belongsTo(User::class, 'user_id'); 
    }
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
   
}
