<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(){
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
         }
    }
    protected function login(Request $request)
    {
        // dd($request);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
     
        if( auth()->attempt($credentials) ){
          $user = Auth::user();
        //   dd($user->name);
            $success['token'] =  $user->createToken('AppName')->accessToken;
            $success['name'] =  $user->name;
                return response()->json(['success' => $success], 200);
                } else {
            return response()->json(['error'=>'Sin autorización'], 401);
        }
    }
    public function user_detail()
        {
        $user = Auth::user();
        return response()->json(['success' => $user], 200);
        }
}
