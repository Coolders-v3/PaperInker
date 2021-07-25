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
    public $selected_id, $keyWord, $jobGenre, $title, $jobIllustration, $yearOfCreation, $user_id;
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
		$this->jobGenre = null;
		$this->title = null;
		$this->jobIllustration = null;
		$this->yearOfCreation = null;
		$this->user_id = null;
    }

    public function store()
    {
        $this->validate([
		'jobGenre' => 'required',
		'title' => 'required',
		'jobIllustration' => 'required',
		'yearOfCreation' => 'required'
        ]);

        Illustration::create([ 
			'jobGenre' => $this-> jobGenre,
			'title' => $this-> title,
			'jobIllustration' => $this-> jobIllustration,
			'yearOfCreation' => $this-> yearOfCreation,
			'user_id' => User::find(Auth::id())->id 
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Illustration Successfully created.');
    }

    public function edit($id)
    {
        $record = Illustration::findOrFail($id);

        $this->selected_id = $id; 
		$this->jobGenre = $record-> jobGenre;
		$this->title = $record-> title;
		$this->jobIllustration = $record-> jobIllustration;
		$this->yearOfCreation = $record-> yearOfCreation;
		$this->user_id = $record-> user_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'jobGenre' => 'required',
		'title' => 'required',
		'jobIllustration' => 'required',
		'yearOfCreation' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Illustration::find($this->selected_id);
            $record->update([ 
			'jobGenre' => $this-> jobGenre,
			'title' => $this-> title,
			'jobIllustration' => $this-> jobIllustration,
			'yearOfCreation' => $this-> yearOfCreation,
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
