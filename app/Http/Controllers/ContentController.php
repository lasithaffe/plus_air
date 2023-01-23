<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ContentController extends Controller
{
   public function about(){
    return view('content/about');
   }
   public function contact(Request $request){
      $data = $request->all();
      
      if(empty($data)){
         $fromAirport=[];
         $toAirport=[];
   
             $fromAirport = DB::table('airports')->get()->toArray();
             $toAirport = DB::table('airports')->get()->toArray();
   
       return view('content/contact')->with(compact('fromAirport','toAirport'));
      }
      else{
         
      }
      
   }
   public function blog(){
    return view('content/blog');
   }
}
