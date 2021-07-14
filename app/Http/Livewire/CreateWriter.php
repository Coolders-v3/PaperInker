<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Text;

class CreateWriter extends Component
{
  use WithPagination;

  public $title, $genre, $year, $description;

  public function render()
  {
    return view('livewire.create-writer');
  }

  public function store()
  {
    /* dd('hola'); */
    $this->validate([
      'title' => 'required',
      'genre' => 'required',
      'year' => 'required',
      'description' => 'required'
    ]);

    /* dd($title, $genre, $year, $description); */

    Text::create([
      'title' => $this->title,
      'genre' => $this->genre,
      'year' => $this->year,
      'description' => $this->description
    ]);
  }
}
