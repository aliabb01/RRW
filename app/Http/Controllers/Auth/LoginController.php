<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

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
    protected $redirectTo = '/welcome';
    /*protected $redirectTo = RouteServiceProvider::HOME;*/
    
    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin) {                            /*  If the user is admin (isAdmin=1 in DB) then redirect to admin page, if not then redirect to user*/
            return redirect('admin');
        }
        return redirect('user');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */

    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();

        /*dd($githubUser);*/
        $user = User::where('provider_id', $githubUser->getId())->first();  // Checks if user already logged into his account by github then selects his id and just logs in

        if (!$user) {

            // add user to database
            $user = User::create([
                'email' => $githubUser->getEmail(),
                'name' => $githubUser->getName(),
                'provider_id' => $githubUser->getId(),
                /*'provider'  => 'github'   <-- for multiple social accounts use this*/
            ]);
        }

        //login the user
        Auth::login($user, true);

        if ($user->isAdmin) {                            /*  If the user is admin (isAdmin=1 in DB) then redirect to admin page, if not then redirect to user*/
            return redirect('admin');
        }
        return redirect('user');
     
     /*   return redirect($this->redirectTo);    //redirectTo is home page, look Up )*/

        // $user->token;
    }
}
