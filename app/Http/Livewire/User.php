<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{

    public $personaldescription;

    public function store () 
    {
        $this->validate([
            'personaldescription' => 'required',
            ]);


            $this->emit('closeModal');
		    session()->flash('message', 'Personal description successfully uploaded.');
    }

    public function update()
    {
        $this->validate([
		'personaldescription' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.user.user');
    }
}