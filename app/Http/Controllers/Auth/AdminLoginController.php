<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //guest middleware for admin i.e not logged in as admin
    public function __construct()
    {
        //redirect all users who don't have access to admin to the showLoginForm
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }


    public function login(Request $request)
    {
        // Validate the form input data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //If successful, then redircet to their intended location
            return redirect()->intended(route('admin.dashboard'));
        } else {
            return redirect()->back()->withErrors('Invalid login credentials');
        }

        //If successful, then redirect them back to the previous page with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
