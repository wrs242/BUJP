<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use app\Models\User;

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
        
        $credentials['password']= md5($credentials['password']);
        

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }
        return redirect()->intended('/dashboard');
        //return back()->with('loginerror','login fail');
       

       //User::create($credentials);
    }
    
    
}
