<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Text;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Support\Facades\Auth;

class Texts extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $genre, $title, $description, $year, $user_id;
    public $updateMode = false;

    public function render()

    {   
        
		$keyWord = '%'.$this->keyWord .'%';

        //if ('user_id' == Writer::find(Auth::id())->id) {
        return view('livewire.texts.view', [
            'texts' => Text::latest()
						->orWhere('genre', 'LIKE', $keyWord)
						->orWhere('title', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->orWhere('year', 'LIKE', $keyWord)
						->orWhere('user_id', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    //}
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
		'year' => 'required',
        ]);
        
        
        Text::create([ 
			'genre' => $this-> genre,
			'title' => $this-> title,
			'description' => $this-> description,
			'year' => $this-> year,
			'user_id' => User::find(Auth::id())->id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Text Successfully created.');
    }

    public function edit($id)
    {
        $record = Text::findOrFail($id);

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
			$record = Text::find($this->selected_id);
            $record->update([ 
			'genre' => $this-> genre,
			'title' => $this-> title,
			'description' => $this-> description,
			'year' => $this-> year,
			'user_id' => $this-> user_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Text Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Text::where('id', $id);
            $record->delete();
        }
    }

   /*  public function createProfile() {
        if (User::find(Auth::id())->isWriter == true) {

            return Writer::create(['user_id' => User::find(Auth::id())->id]);
            //return view('profileViews.userProfile', ["texts"=>$service]);
        }

            return Illustrator::create(['user_id' => User::find(Auth::id())->id]);
           // return view('profileViews.illustratorProfile', ["texts"=>$service]); //origanizar rutas
                   
} */
    
}
