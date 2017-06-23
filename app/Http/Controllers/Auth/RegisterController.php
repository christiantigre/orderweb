<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\SocialProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = '/home';
    protected $redirectTo = '/admin/home';

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
      public function redirectToProvider($provider)
      {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try{
            $socialUser = Socialite::driver($provider)->user();
        }catch(\Exception $e){
            return redirect('/');
        }
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first(); 
        //echo "<img src='".$socialUser->getAvatar() ."'  >";
        $user = $socialProvider;        
        if(!$socialProvider)
        {
            $user = User::firstOrCreate(
                ['email'=>$socialUser->getEmail()],
                ['name'=>$socialUser->getName()],
                ['perfil'=>$socialUser->getAvatar()],
                ['social'=>'1']
                );

            /*$user = User::create([
                'email' => $socialUser->email,
                'name' => $socialUser->name,
                'perfil' => $socialUser->avatar,
                'social' =>"1",
            ]);*/


            $user->SocialProviders()->create(
                ['provider_id'=>$socialUser->getId(),'provider'=>$provider,'avatar'=>$socialUser->getAvatar()]
                );

            \DB::table('users')
            ->where('email', $socialUser->getEmail())
            ->update(['perfil' => $socialUser->getAvatar()]);
            
            Auth::login($user,$socialProvider, true);  
            return redirect('/admin/home');
        }
        else
            $user = $socialProvider->user_id; 
        $authUser = User::where('id', $user)->first();
        Auth::login($authUser, true);  
        return redirect('/admin/home');
    }


}
