<?php

namespace App\Http\Controllers;

use Excel;
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
            
        $numbers=Pin::paginate(500);
        return view ('adminpanel.enterpin',compact('numbers',$numbers));
    }

    public function exportExcel(Request $request) {
        $this->prepareExportingData($request)->export('xlsx');
        redirect()->intended('adminpanel.enterpin',compact('numbers',$numbers));
    }

    
    private function prepareExportingData($request) {
        $numbers = Auth::user()->username;
        $numbers = $this->getExportingData(['from'=> $request['from'], 'to' => $request['to']]);
        return Excel::create('report_from_'. $request['from'].'_to_'.$request['to'], function($excel) use($employees, $request, $author) {

        // Set the title
        $excel->setTitle('List of PINS GENERATED '. $request['from'].' to '. $request['to']);

        // Chain the setters
        $excel->setCreator($numbers)
            ->setCompany('HoaDang');

        // Call them separately
        $excel->setDescription('The list of hired employees');

        $excel->sheet('Hired_Employees', function($sheet) use($employees) {

        $sheet->fromArray($$numbers);
            });
        });
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

        return back();
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
