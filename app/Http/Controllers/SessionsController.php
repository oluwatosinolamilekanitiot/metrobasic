<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    

     public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }
    

    public function login()
    {
        return view ('users.login');
    }


    
    public function store(Request $request)
    {
        
        
        $validator = Validator::make($request->all(), [
			'email'=>'required',
			'password'=>'required',
            
            ]);
        
		if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))) {

			return redirect()->back()->with('info', 'Counld not sign you in with those details!');
		}
        
		return redirect()->route('home');
    
    }

    public function getlogin()
    {
        return view('users.home');
    }

    public function destroy()
    {   
        Auth::logout();
        
        return redirect()->home();
    }
}
