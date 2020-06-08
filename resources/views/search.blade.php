@extends('layouts.app')
@section('content')

<div class="search-results-main">

  <!-- Search Forms Start--------------------------------->

  <form action="/search" method="POST">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div id="search-row" class="row justify-content-center pt-5 pb-1" style="height:150px;">
      <input required list="citiesFrom" autocomplete="off" type="text"
        class="form-control shadow-none col-xl-1 col-lg-1 col-md-2 col-sm-4 col-8 search ml-1" name="from" id="from"
        aria-describedby="" placeholder="{{ __('msg.from')}}">
      <datalist id="citiesFrom">
        @foreach (App\trip::all() as $item)
        <option> {{$item->from}} </option>
        @endforeach
      </datalist>

      <a data-toggle="tooltip" title="Swap" data-delay='{"show":"1000", "hide":"0"}' id="swapBTN"
        onclick="switchFromTo()" class="btn mr-1 ml-2 swapBTN" style="height:39px; width:41px; border-radius:100%;"><i
          id="swap-ico" class="fas fa-sync text-light"></i>
        <!-- Swap button was changed from button to anchor tag. It was returning the result of search -->
      </a>

      <input required list="citiesTo" autocomplete="off" type="text"
        class="form-control shadow-none col-xl-1 col-lg-1 col-md-2 col-sm-4 col-8 search ml-1" name="to" id="to"
        aria-describedby="" placeholder="{{ __('msg.to')}}">
      <datalist id="citiesTo">
        @foreach (App\trip::all() as $item)
        <option> {{$item->to}} </option>
        @endforeach
      </datalist>

      <!--Double Dates -->
      <input placeholder="{{ __('msg.departure') }}"
        class="form-control shadow-none col-xl-2 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1 datepicker" type="text"
        id="dates" style="display:none;" autocomplete="off" name="datefilter" />

      <!--Single Date -->
      <input placeholder="{{ __('msg.departure') }}"
        class="form-control shadow-none col-xl-1 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1 datepicker" type="text"
        id="datesSingle" autocomplete="off" name="datefilterSingle" />

      <!--Ticket For Start --------------------------->
      <div class="dropdown" style="height:0px;" id="" onchange="checkNum()">
        <button class="btn btn-lg ml-1 ticket-for shadow-none" style="width:200px; height:58px;" type="button"
          id="classBTN" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span><small id="passenger-count">1 passenger</small><small id="ticket-type-label"
              class="ticket-type-label pl-1 text-secondary">econom</small>
            <div style="width:8px; display:inline-block;" class="dropdown-toggle ticket-for-toggle pl-2"
              id="ticket-for-toggle"></div>
          </span>
        </button>

        <div class="dropdown-menu dropdown-menu-right pl-3 pr-3 counter" id="drop-passenger-counter" style="width:auto;"
          onclick="event.stopPropagation()">
          <!-- Event stopPropagation fixes div from closing when clicked inside it -->
          <h6 class="ml-2"> <b>Adult: <small style="font-size:86%;"> (Passengers over 12)</small></b>
            <p></p><input class="form-control-sm" onchange="checkNumber()" id="adult-passenger" type="number" value="1"
              min="1" max="9" step="1" />
          </h6>


          <h6 class="ml-2"> <b>Children: <small style="font-size:86%;"> (2-12)</small></b>
            <p></p><input class="form-control-sm" onchange="checkNumber()" id="child-passenger" type="number" value="0"
              min="0" max="6" step="1" />
          </h6>


          <h6 data-toggle="tooltip" data-placement="right" data-offset="15 20"
            title="For every adult passenger there can be maximum 1 infant passenger"
            data-delay='{"show":"50", "hide":"0"}' id="infants" class="ml-2 infants"> <b>Infants: <small
                style="font-size:86%;"> (Younger than 2)</small></b>
            <p></p><input class="form-control-sm infant-input" onchange="checkNumber()" id="infant-passenger"
              type="number" value="0" min="0" max="3" step="1" />
          </h6>

          <div class="dropdown-divider" style="border-color:black;"></div>

          <div class="custom-control custom-radio" style="font-size:16px;">
            <input onclick="checkEco()" type="radio" class="custom-control-input" id="eco-cls" name="class" value=""
              checked>
            <label class="custom-control-label radio-label" for="eco-cls">{{ __('msg.economy-cls')}}</label>
          </div>

          <div class="custom-control custom-radio" style="font-size:16px;">
            <input onclick="checkBus()" type="radio" class="custom-control-input" id="bus-cls" name="class" value="">
            <label class="custom-control-label radio-label" for="bus-cls">{{ __('msg.business-cls')}}</label>
          </div>

        </div>

      </div>
      <!--Ticket For END --------------------------->

      <!--<select style="height:55px;" class="class col-xl-1 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1" placeholder="Class"
    id="choose">
    <option class="choose-class" disabled selected><span>{{ __('msg.choose-cls')}}</span></option>
    <option value="eco">{{ __('msg.economy-cls')}}</option>
    <option value="bus">{{ __('msg.business-cls')}}</option>      
  </select>-->

      <!-- Search BUTTON ---------------------------->
      <button value="search"
        class="btn btn-outline-primary shadow-none col-xl-0.1 col-lg-2 col-md-2 col-sm-4 col-8 ml-1" id=""
        name="submitBTN" style="margin-left:1% !important; height:55px !important;"> <span
          class="search-label">{{ __('msg.search')}} <i class="fas fa-search search-ico" id="search-ico"></i></span>
      </button>
    </div>
  </form>

  <hr>

  <!-- RESULT CONTAINER -->
  <div class="search-res">
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
      <div class="row text-light pl-5 search-header bg-dark pt-3 pb-3"
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


    <div id="search-tickets" class="">
      @if (count($trips) > 0)
      @foreach($trips as $i)
      <div class="main-search-result-container" id="main-search-result-container" style="display:none;">
        <div class="container bg-light text-dark mt-5 search-info">
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
      @else
      <div class="text-center">
        <h2 class="pt-5 pb-5">No trips found</h2>
        <hr>
      </div>
      @endif
    </div>
    <div style="padding-bottom:200px;" class="text-center"><small>Provided by <b>ApollonRailway</b></small></div>
  </div>

</div>

<style>
  .search-results-main {
    background-color: var(--body-background);
  }

  .tooltip-inner {
    background-color: rgba(50, 50, 50, 0.95);
    border: 1px solid var(--primary-skyblue);
  }

  .arrow {
    visibility: hidden;
  }

  #swapBTN {
    background-color: #5893D3;
    transform: scale(0.8);
    transition: 0.5s;
    z-index: 1000;
    border-width: 2px;
  }

  #swapBTN:hover {
    background-color: rgb(30, 60, 83);
    border-color: var(--primary-skyblue);
    transition: 0.5s;
    border-width: 2px;
  }

  #swapBTN #swap-ico {
    transition: 0.5s;
  }

  #swapBTN:hover #swap-ico {
    transition: 0.5s;
    transform: rotate(315deg);
    color: var(--primary-orange) !important;
  }

  .row {
    width: 100%;
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

  .in-range {
    background-color: #FFD274 !important;
  }

  .end-date {
    background-color: #357EBD !important;
  }

  .daterangepicker {
    z-index: 10;
  }

  .today {
    background-color: dodgerblue;
    color: white;
  }

  /* Ticket For Styles  START ----------------*/
  .ticket-for:focus .ticket-for-toggle {
    transform: rotateX(180deg);
    transition: 0.3s ease-in;
  }

  .ticket-for {
    background-color: white;
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    height: 2.8rem !important;
  }

  .ticket-for:focus {
    border-color: orange;
    background-color: rgb(7, 57, 94);
    color: white;
  }

  #dropdownMenuButton:focus {
    background-color: #07395E;
    color: #7b7b7b;
  }

  .radio-label:hover {
    color: #5893D3;
    cursor: pointer;
    font-style: bold;
  }

  .btn-decrement:hover {
    color: white;
    background-color: var(--laravel-logo);
  }

  .btn-increment:hover {
    color: white;
    background-color: var(--primary-skyblue);
    border-width: 1px;
  }

  .btn-increment {
    border-color: var(--primary-skyblue);
    border-width: 1.5px;
  }

  .btn-decrement {
    border-color: var(--primary-orange);
  }

  /* Ticket For Styles  END --------------------*/

  .search:focus {
    border-color: orange;
    background-color: rgb(7, 57, 94);
    color: white;
  }

  #search-btn {
    -webkit-text-size-adjust: auto;
    background-color: #5893D3;
    margin-bottom: 14%;
    height: 60%;
    width: 11% !important;
  }

  .search-btn:hover {
    filter: contrast(150%);
    border-color: var(--primary-orange);
    border-width: 1.5px;
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
  }

  .search-label {
    font-size: 1.3rem;
  }

  .search-ico {
    padding-left: 10%;
  }

  #search-btn #search-ico {
    /* HOVER OFF */
    transition: ease 0.3s;
  }

  #search-btn:hover #search-ico {
    /* HOVER ON */
    color: orange;
    padding-left: 5%;
    transition: ease 0.3s;
  }

  datalist {
    display: none;
  }

  input::-webkit-calendar-picker-indicator {
    display: none;
  }

  .search {
    /*height:auto;*/
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55) !important;
    margin-bottom: 14%;
    width: 11%;
    height: 2.5rem;
  }

  #search-row {
  }
</style>


<script>
  $('input[name="datefilter"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
          applyLabel: "Apply",
            cancelLabel: 'Clear',
        },
        applyButtonClasses: "btn-success",
  cancelClass: "btn-danger",
  opens: "center",
  minDate:"05/19/2020"
    })
  
    $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
    });
  
    $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });    
</script>

<script>
  $('input[name="datefilterSingle"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
          applyLabel: "Apply",
            cancelLabel: 'Clear',
        },
        applyButtonClasses: "btn-success",
  cancelClass: "btn-danger",
  opens: "center",
  minDate:"05/19/2020",
  singleDatePicker:true
    })
  
    $('input[name="datefilterSingle"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD'));
    });
  
    $('input[name="datefilterSingle"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });   
</script>

<script>
  /* For turning inputs to bootstrap-input-spinner */
  $("input[type='number']").inputSpinner();
</script>

<script>
  function switchToOneway() {
  if (document.getElementById('dates') !== undefined) {
    if (document.getElementById('datesSingle').style.display == 'block') {
      document.getElementById('dates').style.display = 'none';
      document.getElementById('datesSingle').style.display = 'block';
      document.getElementById('from-label').style.marginLeft = '23%';
      document.getElementById('to-label').style.marginLeft = '8.7%';
      document.getElementById('departure-label').style.marginLeft = '7.5%';
      document.getElementById('passengers-and-class-label').style.marginLeft = '5%';
    } else {
      document.getElementById('dates').style.display = 'none';
      document.getElementById('datesSingle').style.display = 'block';
      document.getElementById('from-label').style.marginLeft = '23%';
      document.getElementById('to-label').style.marginLeft = '8.7%';
      document.getElementById('departure-label').style.marginLeft = '7.5%';
      document.getElementById('passengers-and-class-label').style.marginLeft = '5%';          
    }
  }
}
</script>

<script>
  function switchToFulltrip() {
  if (document.getElementById('dates') !== undefined) {
    if (document.getElementById('datesSingle').style.display == 'block') {
      document.getElementById('dates').style.display = 'block';
      document.getElementById('datesSingle').style.display = 'none';
      document.getElementById('from-label').style.marginLeft = '19%';
      document.getElementById('to-label').style.marginLeft = '8.7%';
      document.getElementById('departure-label').style.marginLeft = '7.5%';
      document.getElementById('passengers-and-class-label').style.marginLeft = '13%';
    } else {
      document.getElementById('dates').style.display = 'block';
      document.getElementById('datesSingle').style.display = 'none';
      document.getElementById('from-label').style.marginLeft = '19%';
      document.getElementById('to-label').style.marginLeft = '8.7%';
      document.getElementById('departure-label').style.marginLeft = '7.5%';
      document.getElementById('passengers-and-class-label').style.marginLeft = '13%';
    }
  }
}
</script>

<script>
  function checkEco(){
   var checkBox = document.getElementById('eco-cls');
   var text = document.getElementById('ticket-type-label');
   if(checkBox.checked == true){
     text.innerHTML = "  econom";
   }
   else{
     text.innerHTML = "  business";
   }
 }

 function checkBus(){
   var checkBox = document.getElementById('bus-cls');
   var text = document.getElementById('ticket-type-label');
   if(checkBox.checked == true){
     text.innerHTML = "  business";     
   }
   else{
     text.innerHTML ="  econom";
   }
 }
</script>

<script>
  function checkNumber(){    
    var text = document.getElementById('passenger-count');
    var adult = document.getElementById('adult-passenger').value;
    var child = document.getElementById('child-passenger').value;
    var infant = document.getElementById('infant-passenger').value;
    if(parseInt(adult) > parseInt(infant)){
      $('#infants').tooltip('disable')
    }
    else{
      $('#infants').tooltip('enable')  /* Not sure which one of them is making the tooltip appear */ 
      $('#infants').tooltip('toggle')  /* right after the adult and infant counts are equal.*/
      $('#infants').tooltip('show')    /* So might just as well keep all of them */
      $('#infants').tooltip('update')
    }
    var maxValue = document.getElementById('adult-passenger').value;
    document.getElementById('infant-passenger').setAttribute("max", maxValue);
    text.innerHTML = parseInt(adult) + parseInt(child) + parseInt(infant) + " passengers";
    if(parseInt(adult) + parseInt(child) + parseInt(infant) == 1){
      text.innerHTML = parseInt(adult) + parseInt(child) + parseInt(infant) + " passenger";
    }
  }
</script>

<script>
  $(document).ready(function(){
  $('#infants').tooltip({
    trigger: 'hover'
  });
  $('#infants').tooltip('disable');
});
</script>

<script>
  function switchFromTo(){
    var from = document.getElementById('from').value;
    var to = document.getElementById('to').value;
    document.getElementById('to').value = from;
    document.getElementById('from').value = to;
  }
</script>

@endsection