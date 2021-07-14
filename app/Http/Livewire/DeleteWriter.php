<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Text;

class DeleteWriter extends Component
{
    public function destroy($id)
    {
        Text::destroy($id);
        
        //return view('livewire.delete-writer');
    }
}
