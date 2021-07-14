<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Text;
use Livewire\WithPagination;


class ReadWriter extends Component
{
    use WithPagination;

    public function render()

    {
        
     
        return view('livewire.read-writer', ["texts" => Text::orderBy('id', 'asc')->paginate(2)]);
       
    }

    public function destroy($id)
    {
        Text::destroy($id);
        
        //return view('livewire.delete-writer');
    }
    
}
