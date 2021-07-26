<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Illustration;
use App\Models\User;
use App\Models\Illustrator;
use Illuminate\Support\Facades\Auth;

class Illustrations extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';

    public $selected_id, $keyWord, $genre, $title, $description, $year, $user_id;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.illustrations.view', [
            'illustrations' => Illustration::where('user_id', Auth::user()->id)->get()->all()

        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->genre = null;
		$this->title = null;
		$this->description = null;
		$this->year = null;
		$this->user_id = null;
    }

    public function store()
    {
        $this->validate([
		'genre' => 'required',
		'title' => 'required',
		'description' => 'required',
		'year' => 'required'
        ]);

        Illustration::create([ 
			'genre' => $this-> genre,
			'title' => $this-> title,

			'description' => $this-> description,
			'year' => $this-> year,
			'user_id' => User::find(Auth::id())->id //Illustrator::find(Auth::id())->id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Illustration Successfully created.');
    }

    public function edit($id)
    {
        $record = Illustration::findOrFail($id);

        $this->selected_id = $id; 
		$this->genre = $record-> genre;
		$this->title = $record-> title;
		$this->description = $record-> description;
		$this->year = $record-> year;
		$this->user_id = $record-> user_id;

		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'genre' => 'required',
		'title' => 'required',
		'description' => 'required',
		'year' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Illustration::find($this->selected_id);
            $record->update([ 
			'genre' => $this-> genre,
			'title' => $this-> title,
			'description' => $this-> description,
			'year' => $this-> year,
			'user_id' => $this-> user_id

            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Illustration Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Illustration::where('id', $id);
            $record->delete();
        }
    }
}
