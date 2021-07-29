<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;

    public $personaldescription;
    public $personalImage;

    protected $fillable = ['personaldescription', 'personalImage'];

    public function store () 
    {
        $this->validate([
            'personaldescription' => 'required',
            'personalImage'=> 'required'
            ]);


            $this->emit('closeModal');
		    session()->flash('message', 'Personal description successfully uploaded.');
    }

    /* public function update()
    {
        $this->validate([
		'personaldescription' => 'required',
        ]);
    } */

    public function render()
    {
        return view('livewire.user.user');
    }
}