<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmissionLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admission');
    } 
    //
    public function showLoginForm()
    {
        return view('auth.admission-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8|max:21'
        ]);
        // Attempt to log user in
        if ( Auth::guard('admission')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember) )
        {
            // if successful, redirect to their intended location
            return redirect()->intended(route('admission.dashboard'));
        }

        return redirect()->back()->withInput($request)->only('email', 'remember');
        
    }
}

