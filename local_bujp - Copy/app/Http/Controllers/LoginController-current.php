<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bujp;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authentication(Request $request)
    {

        
        $credentials = $request-> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $request['password']= md5($request['password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $bujp = bujp::where('status','kerjasama');
            return view('master',compact('bujp'));
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
    


    }

    
    
}
