<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authentication(Request $request)
    {

        
        $request-> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $request['password']= md5($request['password']);

        $user = user::where('username', '=', $request->username)->first();
        if($user){
            $pass = user::where('password','=', $request->password)->first();
            if ($pass){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');

        } else {
            return back()->with('fail', 'password salah.');

        } 
        } else {
        return back()->with('fail', 'username salah.');
        }

        /*

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
            */


    }

    
    
}
