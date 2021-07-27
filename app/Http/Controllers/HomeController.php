<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\Illustration;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Writer;
use App\Models\Illustrator;
use App\Models\Http\Livewire;


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

    {    //$texts = Text::where('user_id', Auth::user()->id)->get()->all();

       // $loggedUser = User::auth();
        $texts = Text::where('user_id', Auth::user()->id)->get()->all();
        $illustrations = Illustration::where('user_id', Auth::user()->id)->get()->all();
        $writers = Writer::where('user_id', Auth::user()->id)->get()->all();
        $illustrators = Illustrator::where('user_id', Auth::user()->id)->get()->all();

        
       if (User::find(Auth::id())->isWriter == true && count($writers) == 0) {

            Writer::create(['user_id' => User::find(Auth::id())->id]);
            return view ('home', ['texts' => $texts]);
            //return view('livewire.texts.view', ['texts' => $texts]);
        }
        if (User::find(Auth::id())->isWriter == true && count($writers) != 0){
            return view ('home',  ['texts' => $texts]);
            //return view('livewire.texts.view', ['texts' => $texts]);
        }

        if (User::find(Auth::id())->isWriter == false && count($illustrators) == 0) { 

            Illustrator::create(['user_id' => User::find(Auth::id())->id]);
            return view ('home',  ['illustrations' => $illustrations]);
            //return view('livewire.illustrations.view', ['illustrations' => $illustrations]);}
        
            if (User::find(Auth::id())->isWriter == false && count($illustrators) != 0) {
                
            return view ('home', ['illustrations' => $illustrations]);
            //return view('livewire.illustrations.view', ['illustrations' => $illustrations]);
            }
           // return view ('home');
        }
    }

      
}



