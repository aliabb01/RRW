<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\trip;
use DB;
class searchcontroller extends Controller
{
    public function search(Request $request)
    {
      
       $to=$request->to;
       $fr=$request->fr;
       $datefilter=$request->datefilter;
       $filtersearch = trip::where('to','like','%'.$to.'%') 
                            ->where('from','like','%'.$fr.'%')
                            ->orwhere('trip_date','like','%'.$datefilter.'%')->get();
    if ( $filtersearch )
    {
        return view ('/search')->with(['trips' => $filtersearch ]);
    }  
    else
    {
return redirect ('/search')->with(['plz try again']);
    }
    }
   
}
