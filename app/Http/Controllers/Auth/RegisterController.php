<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

use Socialite;
use App\Events\UserRegistered;

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
    protected $redirectTo = '/dashboard';

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
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);



        return $user;
    }

    /**
   * Redirect the user to the GitHub authentication page.
   *
   * @return Response
   */
  public function redirectToProvider()
  {
      return Socialite::driver('facebook')->redirect();
  }

  /**
   * Obtain the user information from GitHub.
   *
   * @return Response
   */
  public function handleProviderCallback()
  {
      $user = Socialite::driver('facebook')->user();


      $authUser = $this->findOrCreateUser($user, 'facebook');
        Auth::login($authUser, true);
        return redirect()->route('dashboard');

    

      // $user->token;
  }

   public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('facebook_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        
       
        $name = explode(" ",$user->name);
        if(!$user->email) {
          $email = $name[0].'.'.$name[1].'@facebook.com';
        }else{
          $email = $user->email;
        }
        $user = User::create([
            'name'     => $name[0],
            'surname' => $name[1],
            'email'    => $email,
            'facebook_id' => $user->id
        ]);

        $user->attachRole('user');

        return $user;

    }
}
