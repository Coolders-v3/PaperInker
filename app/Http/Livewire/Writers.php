<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Writer;

class Writers extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $personaldescription, $personalImage;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.illustrations.view', [
            'writers' => Writer::latest()
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('personaldescription', 'LIKE', $keyWord)
						->orWhere('personalImage', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->user_id = null;
		$this->personaldescription = null;
		$this->personalImage = null;
    }

    public function store()
    {
        $this->validate([
        ]);

        Writer::create([ 
			'user_id' => $this-> user_id,
			'personaldescription' => $this-> personaldescription,
			'personalImage' => $this-> personalImage
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Writer Successfully created.');
    }

    public function edit($id)
    {
        $record = Writer::findOrFail($id);

        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->personaldescription = $record-> personaldescription;
		$this->personalImage = $record-> personalImage;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Writer::find($this->selected_id);
            $record->update([ 
			'user_id' => $this-> user_id,
			'personaldescription' => $this-> personaldescription,
			'personalImage' => $this-> personalImage
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Writer Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Writer::where('id', $id);
            $record->delete();
        }
    }
}
