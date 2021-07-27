<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;

    public function upload(){
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);

        $url = $this->image->store('images', 'public');
         @dd($url);

    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
