<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Writer;
use App\Models\Illustrator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware('guest');
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

         /*  $loggedUserId = User::find(Auth::id());
            dd($loggedUserId); */
            /* $writer = new Writer;
            Writer::find($id);
            dd($loggedUserId); */
            /* Writer::find($id);
            return $writer->user()->attach($loggedUserId); */
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nickname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'isWriter' => ['required', 'boolean']
        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

            return User::create([
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'isWriter' => $data['isWriter']/* , Writer::create() && Illustrator::create()  */ /* , $writer::find()->user()->attach($loggedUserId) && Illustrator::create() */
            ]); 
            
            
           /*  $user = User::find(Auth::id());
            return Writer::create()->store; */
            
            //->user()->save($user);

            /* $loggedUserId = User::find();
            $writer = Writer::create();
            $writer::find(Auth())->user()->attach($loggedUserId) &&  *///Illustrator::create();
        
       
            
            
    }
 
}
