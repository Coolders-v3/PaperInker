<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Text;
use Livewire\WithPagination;


class ReadWriter extends Component
{
  use WithPagination;

  public $title, $genre, $year, $description;

  public function render()
  {
    return view('livewire.read-writer', ["texts" => Text::orderBy('id', 'asc')->paginate(2)]);
  }

  public function destroy($id)
  {
    Text::destroy($id);

    //return view('livewire.delete-writer');
  }

  public function createView() {
    return view('livewire.create-writer');
  }

  /* public function store()
  {
    $this->validate([
      'title' => 'required',
      'genre' => 'required',
      'year' => 'required',
      'description' => 'required'
    ]);

    Text::create([
      'title' => $this->title,
      'genre' => $this->genre,
      'year' => $this->year,
      'description' => $this->description
    ]);
  } */
}
