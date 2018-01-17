<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Ad;
use App\Message;

class ProfileController extends Controller
{
    public function show()
    {


      if(!Auth::check())
      {
        return redirect()->route('login');
      }
      $userId = Auth::user()->id;
      $ads = Ad::where('user_id',$userId)->paginate(9);
      return view('profile.show',[
        'ads' => $ads,
          ]);
    }


    public function favorites()
    {

      $user = User::find(Auth::user()->id);
      $favorites = $user->favorites()->paginate(9);
       return view('profile.favorites',[
          'favorites' => $favorites,
          ]);
    }
}
