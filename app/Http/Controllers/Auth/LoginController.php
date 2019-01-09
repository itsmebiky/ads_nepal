<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/backend';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     /**
     * Redirect the user to the google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();  
        
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
       
        $google_user = Socialite::driver('google')->stateless()->user();
        //  dd($google_user); 
        $user = User::where('provider_id',$google_user->getId())->first();
        if($user){
            Auth::login($user, true);
            return redirect('/');
          
        }

    else{
        $user = User::create([
            'email'=> $google_user->getEmail(),
            'password'=> bcrypt(123456),
            'name' => $google_user->getName(),
            'provider_id' => $google_user->getId(),
            'user_avatar' => $google_user->getAvatar(),
            ]);
            Auth::login($user, true);
            return redirect('/');
    }
        //add user to database
           

        // $user->token;
    }
}
