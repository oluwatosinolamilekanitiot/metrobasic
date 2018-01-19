<?php

namespace App\Http\Controllers;

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


    
    public function store()
    {
        if (auth()->attempt(request(['email','password']))) {
            // Authentication passed...
            return view('users.home');
            
        }

        return back();
    
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
