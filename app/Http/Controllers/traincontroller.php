<?php

namespace App\Http\Controllers;

use App\train;
use Illuminate\Http\Request;

class traincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = train::all();
        return view ('trains.index',['trains'=> $trains]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('trains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $cities=new train;
        $cities->id=$request->input('id');
         $cities->driver_name=$request->input('driver_name');
         $cities->driver_info=$request->input('driver_info');
         $cities->seats_number=$request->input('seats_number');
         $cities->passengers_number=$request->input('passengers_number');
         
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
       $cities->save();
    // return ("save it");
       return redirect('/trains');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\train  $train
     * @return \Illuminate\Http\Response
     */
    public function show(train $train)
    {
        $tr=train::find($train);
        return view('trains.show',compact('trains','train'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\train  $train
     * @return \Illuminate\Http\Response
     */
    public function edit(train $train)
    {
        $trains=train::find($train);
        return view('trains.edit',compact('trains','train'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\train  $train
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, train $train)
    {
       
        $request->validate([
            'id'=> 'required',
            'driver_name'=> 'required',
            'driver_info'=> 'required',
            'seats_number'=> 'required',
            'passengers_number'=> 'required'
            
        
        ]);
             //   $cities->update($request->all());
              $cit=train::find($train);
             // $cities=city::all();
               $cit->id=$request['id'];
               $cit->driver_name=$request['tdriver_name'];
               $cit->driver_info=$request['driver_info'];
               $cit->seats_number=$request['seats_number'];
               $cit->passengers_number=$request['passengers_number'];
              
            //   DB::update('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
         $cit->save();
           //
               //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
           ///   $cities->save();
                //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
           // $cities->save();
        
          
               return redirect('/trains');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\train  $train
     * @return \Illuminate\Http\Response
     */
    public function destroy(train $train)
    {
        $city=train::find($train);
        $city->delete();
            return redirect('/trains');
    }
}
