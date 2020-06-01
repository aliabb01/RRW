@extends('layouts.app')
@section('content')

<div class="search">
  <div class="container">
    <div class="row">
      <div class="col">
        @foreach($trips as $i)
        <h3></h3>
        @endforeach
      </div>
    </div>
  </div>



  <div class="container" id="search-nav">
    <div class="row text-light mt-5 pl-5 search-header bg-dark pt-3 pb-3"
      style="border-radius:25px; border:3px solid var(--primary-skyblue); font-size:110%;">
      <div class="col">From</div>
      <div class="col">|</div>
      <div class="col">To</div>
      <div class="col"> |</div>
      <div class="col">Date</div>
      <div class="col ml-3"> |</div>
      <div class="col">Departure</div>
      <div class="col ml-4"> |</div>
      <div class="col mr-5">Price (in $)</div>
    </div>
  </div>

  <hr>
  <div id="search-tickets" class="">
    @foreach($trips as $i)
    <div class="main-search-result-container" id="main-search-result-container" style="display:none;">
      <div class="container bg-light text-dark search-info">
        <h4 class="text-center pt-2">Ticket by: <span>{Insert Company name here}</span></h4>
        <div class="search-results mt-2 ">
          <div class="row mt-4 pt-3 pb-3 ">
            <div class="col ml-5 pr-5">{{$i->from}} <span style="float:right; font-size:125%;"><i
                  class="fas fa-long-arrow-alt-right"></i></span></div>
            <div class="col ml-4 pr-5">{{$i->to}}</div>
            <div class="col ml-4 pr-5">{{$i->trip_date}}</div>
            <div class="col ml-5 pl-5 pr-5">{{$i->time_depart}}</div>
            <div class="col ml-5">{{$i->price}}</div>
          </div>
        </div>
      </div>
      <div class="text-center container pt-2 pb-1 mb-4 bg-light search-purchase-div" style="height:80px;">
        <a href="payment" class="btn btn-primary purchase-BTN"
          style="font-size:140%; border-radius:25px; width:35%; height:70%;">Purchase the ticket for <span
            class="ml-2">{{$i->price}} $</span></a>
      </div>
    </div>
    <hr>

    @endforeach
  </div>

  <div style="padding-bottom:200px;" class="text-center"><small>Provided by <b>ApollonRailway</b></small></div>
</div>

<style>
  .search{
    background-color: var(--body-background);
  }
  .search-info {
    border-left: 1px solid black;
    border-right: 1px solid black;
    border-top: 1px solid black;
  }

  .search-purchase-div {
    border-left: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
  }

  .purchase-BTN {
    background-color: var(--primary-skyblue) !important;
    -webkit-box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.2);
  }

  .purchase-BTN:hover {
    border: 2px solid black;
    background-color: var(--primary-orange) !important;
    transition: 0.5s;

    -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
    -moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
    box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
  }
</style>


<script>
</script>
@endsection