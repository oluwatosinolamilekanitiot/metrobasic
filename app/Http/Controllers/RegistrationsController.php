<?php

namespace App\Http\Controllers;


use App\User;
use Auth;
use Hash;

use Validator;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }


    public  function signup()
    {
        return view ('users.signup');
    }

    public  function create(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|',
        'email' => 'required|unique:users',
        'number' => 'required|unique:users',
        'password' => 'required|min:8|confirmed',      

            ]);
        
        
        
        
        $user= New User;

         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->number = $request->input('number');
         $user->password=Hash::make($request->input('password'));

         $user->save();

            Auth::login($user);
            //redirect
            
            // return redirect()->home()->with('success', 'Thanks for choosing MetrobaiscMaths');
                // return redirect()->home()->with('success','Thanks For Choosing MetrobasicMaths');
            return view ('users.home');
         //return redirect()->route('users.home')->with('success','Thanks For Choosing MetrobasicMaths');
    
    }
}
