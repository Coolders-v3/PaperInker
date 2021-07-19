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
        $user_id1 = User::find(Auth::id())->id;
        $writer = Writer::create(['user_id' => $user_id1]);
       
        //$userIdWriter = $writer->user_id($user_id);
        //$writer->user_id->attach($user_id);
        /*->attach(User::find(Auth::id())) */;
        /* $writer = Writer::find();
        $user_id = User::find(Auth::id());
        $writer->user_id; */
        $idWriter = $writer->id;
        //$hola = $writer->user($user_id);//->(User::find(Auth::id())->id);
        $writer->user_id = User::find(Auth::id())->id;
       // Writer::find($idWriter)->user_id = $user_id1;
        //$writer = Writer::create()->user_id;
    
      
        //dd($writer, $user_id1, $idWriter, $writer->user_id);
        return view('profileViews.illustratorProfile', ["texts"=>$service]); //origanizar rutas
    }
}
