<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;

/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('adminlte::auth.register');
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms'    => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $fields = [
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ];
        if (config('auth.providers.users.field','email') === 'username' && isset($data['username'])) {
            $fields['username'] = $data['username'];
        }
        return User::create($fields);
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

        try{
            $socialUser = Socialite::driver('user')->user();
        }catch(\Exception $e){
            return redirect('/ ');
        }

        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first(); 
        if(!$socialProvider)
    {
        //create user
$user = User::firstOrCreate(
    ['email'=>$socialUser->getEmail()],
    ['name'=>$socialUser->getName()]
    );

$user->socialProvider()->create(
    ['provider_id'=>$socialUser->getId(),'provider'=>'facebook']
    );
        }
        else
        //{
    $user = $socialProvider->user;        
    auth()->login($user);
    return redirect('/home');
        //}


        //$user = Socialite::driver('facebook')->user();
        //return $user->getEmail();
        // $user->token;
    }


}
