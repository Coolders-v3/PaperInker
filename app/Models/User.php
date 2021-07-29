<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Models\Writer;
use App\Models\Illustrator;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'nickname',
    'email',
    'password',
    'isWriter'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function writer()
  {
    return $this->hasOne(Writer::class);
  }

  public function illustrator()
  {
    return $this->hasOne(Illustrator::class);
  }

  public function texts()
  {
    return $this->hasMany(Text::class);
  }

  public function illustrations()
  {
    return $this->hasMany(Illustration::class);
  }

  /* public function createProfile() {
        
        if (User::find(Auth::id())->isWriter == true) {

                return Writer::create(['user_id' => User::find(Auth::id())->id]);
                //return view('profileViews.writerProfile', ["texts"=>$service]);
            }
    
                return Illustrator::create(['user_id' => User::find(Auth::id())->id]);
               // return view('profileViews.illustratorProfile', ["texts"=>$service]); //origanizar rutas
                       
    } */
}
