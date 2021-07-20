<?php

namespace App\Http\Controllers;

use App\Models\Text;
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
        $service = Text::all(); 
        
      
        if (User::find(Auth::id())->isWriter == true && count (Text::all()) == 0) {

            Writer::create(['user_id' => User::find(Auth::id())->id]);
            return view('profileViews.writerProfile', ["texts"=>$service]);
        }

        if (User::find(Auth::id())->isWriter == false && count (Text::all()) == 0) {

            Illustrator::create(['user_id' => User::find(Auth::id())->id]);
            return view('profileViews.illustratorProfile', ["texts"=>$service]); //origanizar rutas
    }
}
}
