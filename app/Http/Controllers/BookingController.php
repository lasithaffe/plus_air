<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request)
{
    $fromAirport=[];
    $toAirport=[];
    $data = $request->all();

  
    try {
        $pdo = DB::connection()->getPdo();
        // if it reach this point means the connection success
        // return 'Connected to the database successfully!';
        $fromAirport = DB::table('airports')->where('code', $data['fromAirport'])->first();
    
    $toAirport = DB::table('airports')->where('code', $data['toAirport'])->first();

        
        // DB::table('airports')->get()->toArray();

    } catch (\Exception $e) {
        // if it reach this point means the connection failed
        // return 'Could not connect to the database. '.$e;
    }
   
  


    return view('booking/index')->with(compact('data','fromAirport','toAirport'));;
    // Do something with the data
    // return redirect()->route('success-page');
}
}
