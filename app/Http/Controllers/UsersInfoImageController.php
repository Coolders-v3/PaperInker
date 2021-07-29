<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserInfoImageRequest;
use App\Models\Illustrator;
use App\User;


class UsersInfoImageController extends Controller
{

    protected $fillable = ['personaldescription', 'personalImage'];

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
        return view('user.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInfoImageRequest $request)
    {
        return $request->all();
        $slug = uniqid();
        $userinfoimage = new User(array(
        'personaldescription' => $request->get('personaldescription'), 
        'personalImage' => $request->get('personalImage'),
        'slug' => $slug
        ));
        $userinfoimage->save();
        return redirect('/illustrations')->with('status', 'Your information has been uploaded' . $slug);
    }

    public function update(Request $request, Illustrator $illustratior)
    {
        
/*             $illustrator->personalimage()->attach($illustrator);
 */       
            if ($this->selected_id) {
                $record = Illustrator::find($this->selected_id);
                $record->update([ 
                'personaldescription' => $request-> personaldescription,
                'personalImage' => $request-> personalImage,
                ]);
    
                $this->resetInput();
                $this->updateMode = false;
                session()->flash('message', 'Information Successfully updated.');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
