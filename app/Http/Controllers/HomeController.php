<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\Illustration;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Writer;
use App\Models\Illustrator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $texts = Text::all();
        $illustrations = Illustration::all();

        
       if (User::find(Auth::id())->isWriter == true && count(Text::all()) == 0) {

            Writer::create(['user_id' => User::find(Auth::id())->id]);
            return view ('home');
            //return view('livewire.texts.view', ['texts' => $texts]);
        }
        if (User::find(Auth::id())->isWriter == true && count(Text::all()) != 0) {
            return view ('home');
            //return view('livewire.texts.view', ['texts' => $texts]);
        }

        if (User::find(Auth::id())->isWriter == false && count(Illustration::all()) == 0) { 

            Illustrator::create(['user_id' => User::find(Auth::id())->id]);
            return view ('home');
            //return view('livewire.illustrations.view', ['illustrations' => $illustrations]);}
        
        if (User::find(Auth::id())->isWriter == false && count(Illustration::all()) != 0) {
                
            return view ('home');
            //return view('livewire.illustrations.view', ['illustrations' => $illustrations]);
            }
            return view ('home');
        }
    }
}



