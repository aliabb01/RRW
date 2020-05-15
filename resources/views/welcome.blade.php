@extends('layouts.app')

@section('content')


<!-- <div class="spinner">  
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
  <span class="sr-only">Loading...</span>
  </div>  -->
<div class="cont1">
  @if (Auth::guest())
  <h1 class="text-light text-center">Hi. Where would you like to go?</h1>
  @else
  <h1 class="text-light text-center">Hi, <span>{{Auth::user()->name}}</span>. Where would you like to go?</h1>
  @endif
  <!--<div class="alert alert-primary" role="alert" style="margin-bottom:0px; padding-bottom:10px;">
      This is a primary alert—check it out!
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div> -->

  <!-- Radio Buttons --------------------->
  <div class="control-group trip-type text-center">
    <label id="oneway-label" class="control control-radio text-success mr-3" data-toggle="tooltip" data-placement="left"
      data-delay='{"show":"3000", "hide":"200"}' title="For passengers who are traveling with no return ticket">
      One-way
      <input checked type="radio" onclick="javascript:switchToOneway();" name="radio" class="oneway" id="oneway"
        value="one" />
      <div class="control_indicator" id="onew"></div>
    </label>
    <label id="fulltrip-label" class="control control-radio text-success" data-toggle="tooltip" data-placement="right"
      data-delay='{"show":"3000", "hide":"200"}' title="For passengers who are wishing to travel back and forth">
      Full-trip
      <input type="radio" onclick="javascript:switchToFulltrip();" name="radio" id="full-trip" value="full" />
      <div class="control_indicator"></div>
    </label>
  </div>


  <!--<label style="margin-left:21.5%;" id="from-label" class="text-white from-label">FROM</label>
  <label style="margin-left:8.7%;" id="to-label" class="text-white to-label">TO</label>
  <label class="text-light" id="departure-label" style="margin-left:7.5%;" for="">Departure</label>
  <label class="text-light" id="passengers-and-class-label" style="margin-left:5%;" for="">Passengers and Class</label>-->
  <div class="row labels-row" style="margin-bottom:15px; height:15px;">
    <label style="margin-left:23%;" id="from-label" class="text-white from-label">FROM</label>
    <label style="margin-left:8.7%;" id="to-label" class="text-white to-label">TO</label>
    <label class="text-light" id="departure-label" style="margin-left:7.5%;" for="">Departure</label>
    <label class="text-light" id="passengers-and-class-label" style="margin-left:5%;" for="">Passengers and
      Class</label>
  </div>
  <!-- Search Forms Start--------------------------------->

  <form action="/search" method="POST">
    @csrf
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="row justify-content-center">
    <input list="citiesFrom" type="text" class="form-control col-xl-1 col-lg-1 col-md-2 col-sm-4 col-8 search ml-1"
    name="from"  id="from" aria-describedby="" placeholder="{{ __('msg.from')}}">
    <datalist id="citiesFrom">
      @foreach (App\city::all() as $item)
      <option> {{$item->city_name}} </option>
      @endforeach
    </datalist>
    <button data-toggle="tooltip" title="Swap" data-delay='{"show":"1000", "hide":"0"}' id="swapBTN"
      onclick="switchFromTo()" class="btn mt-2 mr-1 ml-2 swapBTN"
      style="height:39px; width:41px; border-radius:100%;"><i id="swap-ico" class="fas fa-sync text-light"></i></button>
    <input list="citiesTo" type="text" class="form-control col-xl-1 col-lg-1 col-md-2 col-sm-4 col-8 search ml-1"
     name="to" id="to" aria-describedby="" placeholder="{{ __('msg.to')}}">
    <datalist id="citiesTo">
      @foreach (App\city::all() as $item)
      <option> {{$item->city_name}} </option>
      @endforeach
    </datalist>

    <!--Double Dates -->
    <input placeholder="{{ __('msg.departure') }}"
      class="form-control col-xl-2 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1 datepicker" type="text" id="dates"
      style="display:none;" autocomplete="off" name="datefilter" />

    <!--Single Date -->
    <input placeholder="{{ __('msg.departure') }}"
      class="form-control col-xl-1 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1 datepicker" type="text" id="datesSingle"
      autocomplete="off" name="datefilterSingle" />

    <!--Ticket For Start --------------------------->
    <div class="dropdown" style="height:0px;" id="">
      <button class="btn btn-lg ml-1 ticket-for" style="width:200px; height:58px;" type="button" id="classBTN"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span><small id="passenger-count">1 passenger</small><small id="ticket-type-label"
            class="ticket-type-label pl-1 text-secondary">econom</small>
          <div style="width:8px; display:inline-block;" class="dropdown-toggle ticket-for-toggle pl-2"
            id="ticket-for-toggle"></div>
        </span>
      </button>

      <div class="dropdown-menu dropdown-menu-right pl-3 pr-3" id="drop-passenger-counter" style="width:auto;">

        <h6 class="ml-2"> <b>Adult: <small style="font-size:86%;"> (Passengers over 12)</small></b>
           <p></p><input class="form-control-sm " onchange="checkNumber()" id="adult-passenger" type="number" value="1"
            min="1" max="9" step="1" />
        </h6>
        

        <h6 class="ml-2"> <b>Children: <small style="font-size:86%;"> (2-12)</small></b>
           <p></p><input class="form-control-sm" onchange="checkNumber()" id="child-passenger" type="number" value="0"
            min="0" max="6" step="1" />
        </h6>


        <h6 class="ml-2"> <b>Infants: <small style="font-size:86%;"> (Younger than 2)</small></b>
           <p></p><input class="form-control-sm" onchange="checkNumber()" id="infant-passenger" type="number" value="0"
            min="0" max="3" step="1" />
        </h6>

        <div class="dropdown-divider" style="border-color:black;"></div>

        <div class="custom-control custom-radio" style="font-size:16px;">
          <input onclick="checkEco()" type="radio" class="custom-control-input" id="eco-cls" name="class"
            value="" checked>
          <label class="custom-control-label radio-label" for="eco-cls">{{ __('msg.economy-cls')}}</label>
        </div>

        <div class="custom-control custom-radio" style="font-size:16px;">
          <input onclick="checkBus()" type="radio" class="custom-control-input" id="bus-cls" name="class"
            value="">
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
    <button class="col-xl-0.1 col-lg-2 col-md-2 col-sm-4 col-8 btn search-btn ml-1" id="search-btn"
      style="margin-left:1% !important; height:55px !important;"> <span class="search-label">{{ __('msg.search')}} <i
          class="fas fa-search search-ico" id="search-ico"></i></span>
    </button>
  </div>
</form>
</div>

<div class="cont2">
  <img style="margin-left:65px;" src="https://img.icons8.com/ultraviolet/160/000000/reading-confirmation.png" />
  <img style="float:right; transform:rotate(20deg); margin-right:25px;"
    src="https://img.icons8.com/plasticine/100/000000/discount.png" />
  <h1 class="news-h1 text-center">{{ __('msg.get-news')}}</h1>
  <h3 class="text-muted fd">{{ __('msg.sign-up-to-mail')}}</h3>

  <div class="form-group">
    <input type="email" class="form-control email" id="exampleInputEmail1" aria-describedby="emailHelp"
      placeholder="{{ __('msg.enter-email')}}">
    <small id="emailHelp" class="form-text text-muted">{{ __('msg.we-never-share')}}</small>
    <a href="/disscount" type="submit" class="btn btn-primary">{{ __('msg.submit')}}</a>
  </div>


</div>

<div class="cont3" style="display:flex; align-items:center; justify-content:center;">
  <div class="row align-items-center">
    <h1 class="text-info text-center col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-8"> {{ __('msg.new-to-us')}} <a
        href="register"><button type="button" class="btn-lg btn-outline-danger btn-cont3 btn-new">
          {{ __('msg.sign-up')}}
        </button></a></h1>
    <h1 class="text-success text-center col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-8">
      {{ __('msg.check-our-timetable')}} <a href=""><button type="button"
          class="btn-lg btn-outline-primary btn-cont3 btn-timetable">
          {{ __('msg.check-out')}}
        </button></a></h1>
  </div>
</div>





<style>
  #swapBTN {
    background-color: #5893D3;
    transform: scale(1.2);
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

  html {
    background-color: white !important;
  }

  body {
    background-image: url('logo/background5.jpg');
    /*  Moved from cont1 to here after sprint3 May5. Makes the background of cont1 opaque + with background pic*/
    background-size: 100% 100%;
    /*  changed from cover to (100% 100%) */
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  /*html::-webkit-scrollbar {
  display: none;
}*/

  .row {
    width: 100%;
    height: 100px;
    margin-bottom: 21%;
  }

  .search-div {}

  .cont1 {

    background-color: rgba(5, 38, 63, 0.80);
    height: 100%;

    /* ^---Fixed width issue---^ */
    padding-top: 6%;
    padding-bottom: 0.1%;
    background-blend-mode: soft-light;
  }

  .trip-type {
    padding-top: 20px;
    padding-bottom: 30px;
    height: 70px;
    display: block;
    margin-left: 19%;
    margin-top: 4%;
    width: 25%;
  }

  .content-justify-center {
    height: 100px !important;
  }

  datalist {
    display: none;
  }

  input::-webkit-calendar-picker-indicator {
    display: none;
  }

  .search {
    /*height:auto;*/
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    margin-bottom: 14%;
    width: 11%;
    height: 3.5rem;
  }

  #choose {
    height: 54px;
  }

  /* Ticket For Styles  START ----------------*/
  .ticket-for:focus .ticket-for-toggle {
    transform: rotateX(180deg);
    transition: 0.3s ease-in;
  }

  .ticket-for {
    background-color: white;
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
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
  }

  .btn-increment{
    border-color:var(--primary-skyblue);
  }

  .btn-decrement{
    border-color:var(--primary-orange);
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
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
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
    color: var(--primary-orange);
    padding-left: 5%;
    transition: ease 0.3s;
  }

  .class {
    border-radius: 1%;
    height: 100%;
  }

  /* Cont2 START */
  .cont2 {
    background-color: #f2f2f2;
    height: auto;
    text-align: center;
    padding-bottom: 25px;
  }

  .news-svg {
    margin-top: auto;
    margin-left: auto;
  }

  .news-svg:hover {}

  .email {
    /*Enter email textbox*/
    margin: auto;
    width: 85%;
  }

  #emailHelp {
    margin-bottom: 20px;
  }

  .form-group {
    width: 25%;
    margin-left: 37.5%;
  }

  /* Cont2 END */

  /* Cont3 START */

  .cont3 {
    background-image: url('logo/background4.jpg');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 450px;
    padding-top: 5%;
  }

  .news-h1 {
    width: 100%;
    margin: auto;
    padding-top: 25px;
  }

  .fd {
    /* Sign up to our mailing list */
    width: 50%;
    margin: auto;
    margin-top: 1%;
    margin-bottom: 1%;
  }

  .new {
    font-family: "Lucida Console", Monaco, monospace;
    margin-left: 5%;
    margin-top: 5%;
    width: 15%;
    display: inline-block;

  }

  .timetable {
    display: inline-block;
    font-family: "Lucida Console", Monaco, monospace;
    width: 30%;
    margin-left: 2%;
  }

  .btn-cont3 {
    margin-top: 2%;
  }

  .btn-new:hover {
    filter: contrast(90%);
  }

  .btn-timetable:hover {
    filter: contrast(90%);
  }

  .cont4 {
    background-size: cover;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 0px;
    padding-bottom: 25%;
  }

  /* Radio buttons*/

  .control {
    font-family: arial;
    display: inline;
    position: relative;
    padding-left: 30px;
    margin-bottom: 5px;
    padding-top: 3px;
    cursor: pointer;
    font-size: 1vw;
  }

  .control input {
    position: absolute;
    z-index: -1;
    opacity: 0;
  }

  .control_indicator {
    position: absolute;
    top: 2px;
    left: 0;
    height: 20px;
    width: 20px;
    background: #e6e6e6;
    border: 0px solid #000000;
    border-radius: undefinedpx;
  }

  .control:hover input~.control_indicator,
  .control input:focus~.control_indicator {
    background: #03c2ff;
  }

  .control input:checked~.control_indicator {
    background: #f8a004;
  }

  .control:hover input:not([disabled]):checked~.control_indicator,
  .control input:checked:focus~.control_indicator {
    background: #0e6647d;
  }

  .control input:disabled~.control_indicator {
    background: #e6e6e6;
    opacity: 0.6;
    pointer-events: none;
  }

  .control_indicator:after {
    box-sizing: unset;
    content: '';
    position: absolute;
    display: none;
  }

  .control input:checked~.control_indicator:after {
    display: block;
  }

  .control-radio .control_indicator {
    border-radius: 50%;
  }

  .control-radio .control_indicator:after {
    left: 7px;
    top: 7px;
    height: 6px;
    width: 6px;
    border-radius: 50%;
    background: #ffffff;
    transition: background 250ms;
  }

  .control-radio input:disabled~.control_indicator:after {
    background: #7b7b7b;
  }

  .control-radio .control_indicator::before {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 4.5rem;
    height: 4.5rem;
    margin-left: -1.3rem;
    margin-top: -1.3rem;
    background: #2aa1c0;
    border-radius: 3rem;
    opacity: 1;
    z-index: 999;
    transform: scale(0);
  }

  @keyframes s-ripple {
    0% {
      opacity: 0;
      transform: scale(0);
    }

    20% {
      transform: scale(1);
    }

    100% {
      opacity: 0.01;
      transform: scale(1);
    }
  }

  @keyframes s-ripple-dup {
    0% {
      transform: scale(0);
    }

    30% {
      transform: scale(1);
    }

    60% {
      transform: scale(1);
    }

    100% {
      opacity: 0;
      transform: scale(1);
    }
  }

  .control-radio input+.control_indicator::before {
    animation: s-ripple 250ms ease-out;
  }

  .control-radio input:checked+.control_indicator::before {
    animation-name: s-ripple-dup;
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

  @media only screen and (max-width:1368px) {
    .labels-row {
      display: none;
    }
  }

  @media only screen and (max-width:768px) {
    .row {
      height: 200%;
    }
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
  minDate:"05/09/2020"
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
  minDate:"05/09/2020",
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
     text.innerHTML ="  business";
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
    text.innerHTML = parseInt(adult) + parseInt(child) + parseInt(infant) + " passengers";
    if(parseInt(adult) + parseInt(child) + parseInt(infant) == 1){
      text.innerHTML = parseInt(adult) + parseInt(child) + parseInt(infant) + " passenger";
    }
  }
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

@section('scripts')


<!-- For checking if selected city is correct
<script>
  // Find all inputs on the DOM which are bound to a datalist via their list attribute.
var inputs = document.querySelectorAll('input[list]');
for (var i = 0; i < inputs.length; i++) {
  // When the value of the input changes...
  inputs[i].addEventListener('change', function() {
    var optionFound = false,
      datalist = this.list;
    // Determine whether an option exists with the current value of the input.
    for (var j = 0; j < datalist.options.length; j++) {
        if (this.value == datalist.options[j].value) {
            optionFound = true;
            break;
        }
    }
    // use the setCustomValidity function of the Validation API
    // to provide an user feedback if the value does not exist in the datalist
    if (optionFound) {
      this.setCustomValidity('');
    } else {
      this.setCustomValidity('Please select a valid value.');
    }
  });
}

</script>  -->
@stop