<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->middleware('guest:agent')->except('logout');
    }

    public function showAgentLoginForm()
    {
        if(!Auth::guard("agent")->check()){
            $data = [
                'type'   => 'home',
                'chat'   => 'general',
                'page'   => 'login-agent',
                'atribs' => '',
                'js_v2'  => 'js_v2'
            ];
            return view('auth.agent.login',$data);
        }
        return redirect()->intended('/deals/hotels');
    }

    public function createAgent(){

    }

    public function agentLogin(Request $request){
        $this->validate($request,[
            'iata'     => 'required|numeric',
            'password' => 'required'
        ]);
        if (Auth::guard('agent')->attempt(['iata' => $request->input('iata'), 'password' => $request->input('password')],$request->input('remember'))) {
           return redirect()->route('site.deals');
        }
        return back()->withInput($request->only('iata', 'remember','password'))->withErrors(['loginError' => true]);
    }

    public function logoutAgent(Request $request){
        Auth::guard('agent')->logout();
        return redirect()->route('login.show');
    }
}
