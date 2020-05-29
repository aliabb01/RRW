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
       $from=$request->fr;
       $datefilter=$request->datefilter;
       $datefilterSingle=$request->datefilterSingle;
       
       $filtersearch = trip::where('to','like','%'.$to.'%') 
                            ->where('from','like','%'.$from.'%')
                            ->where('trip_date','like','%'.$datefilter.'%')->get();
       
      
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
