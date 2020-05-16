@extends('layouts.app')
@section('content')
    
<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Date_Trip</th>
        <th scope="col">Time</th>
        <th scope="col">Price</th>
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
        @endforeach
    </tbody>
  </table>
@endsection