<?php

namespace App\Http\Controllers;

use App\Models\Illustrator;
use App\Models\Writer;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use Livewire\Component;

class UserController extends Controller
{
    public $personaldescription;
    public $perasonalImage;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  
    }

    public function render()
    {
        return view('livewire.user.user');
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        /* $this->validate([
            'personaldescription' => $request-> personaldescription
        ]); */


            Illustrator::create([ 
                'personaldescription' => $this-> personaldescription
            ]);
            
            Writer::create([ 
                'personaldescription' => $this-> personaldescription
            ]);    
            
            return redirect()->route('home');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
       //
    }
}
