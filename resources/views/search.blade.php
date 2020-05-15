@extends('layouts.app')
@section('content')
    
<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">from</th>
        <th scope="col">to</th>
        <th scope="col">date_trip</th>
        <th scope="col">time</th>
        <th scope="col">price</th>
      <th  class="fas fa-dollar-sign"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($trips as $i)
        <tr>
            <td>{{$i->from}}</td>
            <td>{{$i->to}}</td>
            <td>{{$i->trip_date}}</td>
            <td>{{$i->time_depart}}</td>
            <td>{{$i->price}}</td>
            <td> {{link_to_route('#','Buy',$i,['class'=>'btn btn-success'])}}
        @endforeach
    </tbody>
  </table>
@endsection