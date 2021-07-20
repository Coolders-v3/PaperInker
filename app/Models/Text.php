<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'texts';

    protected $fillable = ['genre','title','description','year','writer_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function writer()
    {
        return $this->hasOne('App\Models\Writer', 'id', 'writer_id');
    }
    
}
