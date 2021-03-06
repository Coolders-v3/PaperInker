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


  /*use RegistersUsers;*/

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  // protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  /*public function __construct()
  {

    $this->middleware('guest');
  }*/

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */


  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */

  protected $redirectToW = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

    $this->middleware('guest');
  }

  protected function validator(array $data)
  {
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
      'nickname' => $data['nickname'],
      'password' => Hash::make($data['password']),
      'isWriter' => $data['isWriter']
    ]);
  }

  protected function createProfile()
  {

    if (User::find(Auth::id())->isWriter == true) {

      return Writer::create(['user_id' => User::find(Auth::id())->id]);
      //return view('profileViews.writerProfile', ["texts"=>$service]);
    }

    return Illustrator::create(['user_id' => User::find(Auth::id())->id]);
    // return view('profileViews.illustratorProfile', ["texts"=>$service]); //origanizar rutas

  }
}
/*  */