<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class rigestercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useres = User::all();
        return view ('useres.myprofile',['useres'=> $useres]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $useres=User::find($user);
        return view('useres.show',compact('useres','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       //// $cities=city::all();
        $useres=User::find($user);
        return view('useres.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
       
        $cit=User::find($user);
       
        $cit->id=$request['id'];
     // $cities=city::all();
     $cit->name=$request['name'];
     $cit->email=$request['email'];
     $cit->phone=$request['phone'];
     $cit->country=$request['country'];
     


    //   DB::update('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
    $cit->save();
  
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   ///   $cities->save();
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   // $cities->save();

  
       return redirect('/myprofile')->with('updateprof', 'Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy( $user)
    {
        $user=User::find($user);
        $user->delete();
        
            return redirect('/welcome')->with('delete', 'Delete Successful');
    }
}
