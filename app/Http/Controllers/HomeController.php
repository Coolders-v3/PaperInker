<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
<<<<<<< HEAD
        return view('profileViews.writerProfile');
=======
        return view('profileViews.writerProfile'); //origanizar rutas
>>>>>>> 0a2649bf02b64b308592c540a0f3d9e1c360f17e
    }
}
