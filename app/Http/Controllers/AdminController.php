<?php

namespace App\Http\Controllers;

use App\message;
use App\Post;
use App\Pin;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller

{
     //
    // protected $guard='admin';
     
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

     public function login()
    {
        if (Auth::guard($admin)->check()) {
            return redirect('/adminindex');
        }
        return view('adminpages.login');        

    }

    public function admin()
    {
        return view ('adminpanel.admin');
    }

    public function generate()
    {
        return view ('adminpanel.generate');
    }

       

    public function signup()
    {
        return view('adminpages.register');
    }

    public function postsignup(Request $request)
    {
        
        $validatedData = $request->validate([
        'name' => 'required|unique:users|',
        'email' => 'required|unique:users',
        'password' => 'required|min:8|confirmed',      

        ]);
        
        

    }

    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function forgetpass()
    {
        return view('adminpages.forgetpassword');        

    }

    public function contactus()
    {
        return view('adminpages.contactus');
    }


    public function try()
    {
        return view('newadmin.index');
    }

    public function tryto()
    {
        $numbers=Pin::paginate(500);
        return view('newadmin.pins',compact('numbers',$numbers));
    }


    
    // list all question sent from users
    public function post(){
        
    	$posts  = Post::latest()->get();
        
        $posts = Post::paginate(10);
        
    	return view('newadmin.post',compact('posts',$posts));
        
 
	}

    
    
}
