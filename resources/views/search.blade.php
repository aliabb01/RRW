@extends('layouts.app')
@section('content')
    
<table class="table table-bordered table-dark mt-5 mb-5">
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
         <td>  <a href="payment" class="btn badge-primary">check out </a> </td>          
        @endforeach
    </tbody>
  </table>
  
@endsection