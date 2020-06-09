<?php

namespace App\Http\Controllers;

use App\trip;
use Illuminate\Http\Request;

class tripcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = trip::all();
        return view ('trips.index',['trips'=> $trips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {
        $cities=new trip;
        $cities->id=$request->input('id');
         $cities->trip_date=$request->input('trip_date');
         $cities->from=$request->input('from');
         $cities->to=$request->input('to');
         $cities->time_depart=$request->input('time_depart');
         $cities->Train_number=$request->input('Train_number');
         $cities->price=$request->input('price');
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
       $cities->save();
    // return ("save it");
       return redirect('/trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(trip $trip)
    {
        $trips=trip::find($trip);
        return view('trips.show',compact('trips','trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(trip $trip)
    {
        $trips=trip::find($trip);
        return view('trips.edit',compact('trips','trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trip $trip)
    {

      
        $request->validate([
            'id'=> 'required',
            'trip_date'=> 'required',
            'from'=> 'required',
            'to'=> 'required',
            'time_depart'=> 'required',
            'Train_number'=> 'required',
            'price'=> 'required'
        
        ]);
             //   $cities->update($request->all());
              $cit=trip::find($trip);
             // $cities=city::all();
               $cit->id=$request['id'];
               $cit->trip_date=$request['trip_date'];
               $cit->from=$request['from'];
               $cit->to=$request['to'];
               $cit->time_depart=$request['time_depart'];
               $cit->Train_number=$request['Train_number'];
               $cit->price=$request['price'];
            //   DB::update('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
         $cit->save();
           //
               //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
           ///   $cities->save();
                //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
           // $cities->save();
        
          
               return redirect('/trips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(trip $trip)
    {
        $city=trip::find($trip);
    $city->delete();
        return redirect('/trips');
    }
}
