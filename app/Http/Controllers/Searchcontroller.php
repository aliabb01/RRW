<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\trip;
use DB;

class Searchcontroller extends Controller
{
    public function  search(Request $request)
    {
        $trips = trip::where('from')->pluck('from', 'trip_date');
        dd($trips);
        return json_encode($trips);
    }
}
