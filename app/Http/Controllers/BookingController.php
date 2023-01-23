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

    
            $fromAirport = DB::table('airports')->where('code', $data['fromAirport'])->first();
            $toAirport = DB::table('airports')->where('code', $data['toAirport'])->first();
        return view('booking/index')->with(compact('data','fromAirport','toAirport'));
        // Do something with the data
        // return redirect()->route('success-page');
        }

        public function inquiry(Request $request)
        {
            $data = $request->all();
            return view('booking/inquiry');
        }
        public function onewaybooking(Request $request)
        {
            $data = $request->all();
            $fromAirport = DB::table('airports')->where('code', $data['fromAirport'])->first();
            $toAirport = DB::table('airports')->where('code', $data['toAirport'])->first();
            $formType="one";
            return view('booking/index')->with(compact('data','fromAirport','toAirport'));           
        }

        public function hotels()
        {
           
        try {
            $pdo = DB::connection()->getPdo();
            // if it reach this point means the connection success
            // return 'Connected to the database successfully!';
            $hotel =  DB::table('hotels')->get()->toArray();

            
            // DB::table('airports')->get()->toArray();

        } catch (\Exception $e) {
            // if it reach this point means the connection failed
            // return 'Could not connect to the database. '.$e;
        }
            return view('booking/hotels')->with(compact('hotel'));           
        }
        public function car(Request $request)
        {
           
            $car =  DB::table('car')->get()->toArray();
            return view('booking/car')->with(compact('car'));           
        }
        public function cruises()
        {
            
        try {
            $pdo = DB::connection()->getPdo();
            // if it reach this point means the connection success
            // return 'Connected to the database successfully!';
            $cruises =  DB::table('cruises')->get()->toArray();

            
            // DB::table('airports')->get()->toArray();

        } catch (\Exception $e) {
            // if it reach this point means the connection failed
            // return 'Could not connect to the database. '.$e;
        }
            return view('booking/cruises')->with(compact('cruises'));    
           
        }
        public function insurance(Request $request)
        { 
            $insurance=[];
            return view('booking/insurance')->with(compact('insurance'));           
        }
       
        
}
