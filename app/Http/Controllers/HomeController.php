<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $airports=[];
        try {
            $pdo = DB::connection()->getPdo();
            // if it reach this point means the connection success
            // return 'Connected to the database successfully!';
            $airports =  DB::table('airports')->get()->toArray();

            
            // DB::table('airports')->get()->toArray();

        } catch (\Exception $e) {
            // if it reach this point means the connection failed
            // return 'Could not connect to the database. '.$e;
        }
       
        return view('home')->with(compact('airports'));;
       
    }
}
