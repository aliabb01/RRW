<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trip;
class ordercontroller extends Controller
{
    public function index(){
        return view('orders')->with(compact('trips'));

    }


    public function destroy( $trip)
    {
        
    $trip=trip::find($trip);
    $trip->delete();
        return redirect('welcome');
    }
}
