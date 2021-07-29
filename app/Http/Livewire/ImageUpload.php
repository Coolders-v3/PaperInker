<?php

namespace App\Http\Livewire;

use App\Models\Illustrator;
use App\Models\Writer;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;

    protected $rules = [
        'image'=>'requered|image|max:2048'
    ];

    public function save(){

        $this->validate();

        $image = $this->image->store('images');

        Illustrator::create([
            /* 'personalImage'=>$this->personalImage */
            'personalImage'=>$image
        ]);
        Writer::create([
            /* 'personalImage'=>$this->personalImage */
            'personalImage'=>$image
        ]);
    }

    public function upload(){
        $this->validate([
            'image' => 'image|max:2048', // 1MB Max
        ]);

        $url = $this->image->store('images', 'public');

    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
