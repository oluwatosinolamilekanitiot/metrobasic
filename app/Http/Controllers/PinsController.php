<?php

namespace App\Http\Controllers;

use DB;
use App\Pin;
use App\Usedpin;
use Illuminate\Http\Request;

class PinsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function enterpin(Request $request)
    {
            
        $numbers=Pin::paginate(10);
        return view ('adminpanel.enterpin',compact('numbers',$numbers));
    }

   

   
    public function create(Request $request)
    {   

        
        $numbers=[];
        $validatedData = $request->validate([
            'random' => 'required',      
        ]);
        $rand=(integer)$request->random;
        for($i=0; $i<$rand; $i++)
        {
            $rand_num=str_random(15);

            // dd($numbers);
            
        $pin = new Pin;

        $pin->numbers= $rand_num;
        $pin->save();
        }
        
        // $save= \DB::table('pins')->insert('$numbers');
    }
    

    public function enter()
    {
        return view ('posts.enter');
    }

    public function wrongpin()
    {
        return view ('partials.Epin');
    }
}
