<?php

namespace App\Http\Controllers;

use App\city;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use  Illuminate\Database\Eloquent\Collection;
use DB;
class citycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = city::all();
        return view ('cities.index',['cities'=> $cities]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cities=new city;
       $cities->id=$request->input('id');
        $cities->city_name=$request->input('city_name');
        $cities->zip_code=$request->input('zip_code');
        $cities->description=$request->input('description');
        $cities->distance=$request->input('distance');
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
      $cities->save();
   // return ("save it");
      return redirect('/cities');
    
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {
        $cities=city::find($city);
        return view('cities.show',compact('cities','city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(city $city)
    {
    // $cities=city::all();
     $cities=city::find($city);
     return view('cities.edit',compact('cities','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $city)
    {

     ///   $cities = city::findOrFail($city);
$request->validate([
    'id'=> 'required',
    'city_name'=> 'required',
    'zip_code'=> 'required',
    'description'=> 'required',
    'distance'=> 'required'

]);
     //   $cities->update($request->all());
      $cit=city::find($city);
     // $cities=city::all();
       $cit->id=$request['id'];
       $cit->city_name=$request['city_name'];
       $cit->zip_code=$request['zip_code'];
       $cit->description=$request['description'];
       $cit->distance=$request['distance'];
    //   DB::update('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
 $cit->save();
   //
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   ///   $cities->save();
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   // $cities->save();

  
       return redirect('/cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy( $city)
    {
        
    $city=city::find($city);
    $city->delete();
        return redirect('/cities');
    }
}
