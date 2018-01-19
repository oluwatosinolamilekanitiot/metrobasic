<?php

namespace App\Http\Controllers;


use App\Usedpin;
use App\Post;
use App\Pin;
use App\Image;
use Validator;
use Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth')->except(['index']);

    }

    public function adminindex()
    {
        return view('adminpages.index');
    }

    public function index()
    {
        return  view ('posts.index');
    }

    public function listcourses()
    {
        return view ('pages.listcourses');
    }
    public function show()
    {   
        $posts  = Post::latest()->get();
        $posts=Post::paginate(10);
        return  view ('posts.show',compact('posts',$posts));
    }

    public function list(Post $post)
    {
        return view ('posts.list');
    }

    public function enter()
    {

        return view ('posts.enter');
    }


    public function enterstore(Request $request)
    {

            //validate the form request and save
            $validatedData = $request->validate([
            'random' => 'required',
               
            ]);
            $pin = Pin::where('numbers', $request->random)->first();
            if($pin)
            {
                // dd('true');
                return view('posts.create')->with('pin',$pin);
            }else{

                return view('partials.Epin');
            }


    }

    
    public function create()
 
    {
        return view('posts.create');
    }

        public function store(Request $request)
    {

            $pin = Pin::where('numbers', $request->random)->first();
            $usedPin = Usedpin::where('pin_id', $pin->id)->first();
            if(!$usedPin || $usedPin->status <= 3){
                
                $validatedData = $request->validate([
                'title' => 'required|max:255',
                'body' => 'required',
            ]);
                    
        
            // dd($request->all());
            
           
            $post = new Post;
            $post->user_id=Auth::user()->id;
            $post->post_id=Auth::user()->id;
            
            $post->title = $request->title;
            //  $post->file = $request->file;
             $post->body = $request->body;
            //  $post->title = $request->input('title');

            // save images
            if($request->hasFile['featured_image']){
                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $filename);
                Image::make($image)->resize(800,400)->save($location);

                $post->image = $filename;
            }
            $post->save();

            // dd($request->all());       
            if(!$usedPin){
                $pin = Usedpin::create([
                    'user_id' => Auth::user()->id,
                    'post_id' => $post->id,
                    'pin_id' => $pin->id,
                    'status' => 1,
                ]);    
            }else{
                    // dd($usedPin);
                     $usedPin->status += 1;
                     $usedPin->save();
            }
          
            
            // dd('success');
            return view('partials.source');

        
            }else{
                // dd('error msg');
            return view ('partials.404');
                
            }
                
        
    }

    
    public function home()
    {
        return view('users.home');
    }
    public function reply(Post $post)
    {
        return view('posts.list', compact('post'));
    }

    // public function inbox(Request $request, $id)
    // {
    //     $posts = Post::find($id);
    //     $reply = Session::has('post') ? Session::get('post') : null;
    //     $newinbox = new Post($inbox);
    //     $newinbox->add($posts, $posts->$id);
    //     dd($request->all());
    //     $request->session()->put('post',$post);
    //     return redirect()->route('home');
 
    // }

    public function comments()
    {
        if(Auth::check()){
            $comment = Comment::create([
                'body' => $request->input('body'),
                'user_id' => Auth::user()->id
            ]);

            if($comment){
                return back()->with('success' , 'Comment created successfully');
            }

        }
        
            return back()->withInput()->with('errors', 'Error creating new comment');

    }

    




}
