<?php

namespace App\Http\Controllers;

use Image;
use App\Usedpin;
use App\Post;
use App\Pin;
// use App\Image;
use Validator;
use Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// use Storage;


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

        $posts  = Post::latest()->get()->toarray();
        
        // $posts  = Post::latest()->get();
        $posts=Post::paginate(500);
        return  view ('posts.show',compact('posts',$posts));
    }

    public function list()
    {   
        $images  = Images::latest()->get();
        dd($images);

        return view ('posts.list',compact(images));
    }

    public function lista()
    {   
        $posts  = Post::latest()->get()->toarray();
        // dd($posts);

        return view ('posts.list', ['Post' => $posts]);
    }

    public function enter()
    {

        return view ('posts.enter');
    }


    public function enterstore(Request $request)
    {

            //validate the form request and save
            // $validatedData = $request->validate([
            // 'random' => 'required',
               
            // ]);
            $validator = Validator::make($request->all(), [
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
                
            //     $validatedData = $request->validate([
            //     'title' => 'required|max:255',
            //     'body' => 'required',
            // ]);
                    
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'body' => 'required',
                ]);

                if( $request->hasFile('image') ) {
                        $image = $request->file('image');
                        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    
                        $img = Image::make($image->getRealPath(),array(
                                    'width' => 100,
                                    'height' => 100,
                                    'grayscale' => false
                                ));
                            
                        $destinationPath = public_path();
                        // dd($destinationPath.'/images/'.$input['imagename']);
                        $img->save($destinationPath.'/images/'.$input['imagename']);
                            $destinationPath = public_path('images');
                            $image->move($destinationPath, $input['imagename']);
                        
                        }
        
                
                        $post = new Post;
                        $post->user_id=Auth::user()->id;
                        $post->post_id=Auth::user()->id;
                        $post->title = $request->title;
                        $post->file = '/images/'.$input['imagename'];
                        $post->body = $request->body;

                
                             $post->save();

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
