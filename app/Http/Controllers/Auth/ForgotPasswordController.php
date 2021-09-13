<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Auth;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:agent');
    }

    /*Agents*/

    public function broker(){
        return \Password::broker("agents");
    }

    // public function sendResetLinkEmail(){
               
    // }

    protected function validateEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email|exists:agents'], [
            'email.required' => 'The email field is mandatory.',
            'email.email' => 'Please insert a valid email.',
            'email.exists' => 'This e-mail is not registered.',
        ]);
    }

    protected function guard(){
        return Auth::guard('agent');
    }
}
