<?php

namespace App\Http\Controllers;

use App\Models\Illustrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IllustratorController extends Controller
{

    public $personaldescription;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function show(Illustrator $illustrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function edit( $illustrator, $id)
    {

    $illustrator = Illustrator::where('user_id', Auth::user()->id)->get()->all(); 

    $illustrator = Illustrator::findOrFail($id);
    
    return view('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Illustrator $illustrator)
    {
        Illustrator::create([ 
            'personaldescription' => $this-> personaldescription
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Illustrator $illustrator)
    {
        //
    }
}
