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
    <label class="control control-radio text-success mr-3">
      One-way
      <input type="radio" onclick="javascript:switchOffTo();" name="radio" class="oneway" id="oneway" value="one" />
      <div class="control_indicator" id="onew"></div>
    </label>
    <label class="control control-radio text-success">
      Full-trip
      <input type="radio" onclick="javascript:switchOnTo();" name="radio" id="full-trip" value="full" />
      <div class="control_indicator"></div>
    </label>
  </div>

  <!--<label style="margin-left:23%;" class="text-white from-label">FROM</label>
  <label style="margin-left:9.2%;" id="to-label" class="text-white to-label">TO</label>-->

  <!-- Search Forms Start--------------------------------->
  <div class="row justify-content-center">
    <input list="citiesFrom" type="text" class="form-control col-xl-1 col-lg-1 col-md-2 col-sm-4 col-8 search ml-1"
      id="from" aria-describedby="" placeholder="{{ __('msg.from')}}">
    <datalist id="citiesFrom">
      <option value="Kaunas">
      <option value="Vilnius">
      <option value="City1">
      <option value="City2">
      <option value="City3">
    </datalist>
    <input list="citiesTo" type="text" class="form-control col-xl-1 col-lg-1 col-md-2 col-sm-4 col-8 search ml-1"
      id="to" aria-describedby="" placeholder="{{ __('msg.to')}}">
    <datalist id="citiesTo">
      <option value="Kaunas">
      <option value="Vilnius">
      <option value="City1">
      <option value="City2">
      <option value="City3">
    </datalist>
    <input placeholder="{{ __('msg.departure')}}"
      class="form-control col-xl-2 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1 datepicker" type="text" id="dates"
      name="datefilter" />

      <!--Ticket For Start --------------------------->
    <div class="dropdown" style="height:0px;" id="">
      <button class="btn btn-lg btn-light ml-1 ticket-for" style="width:200px; height:60px;" type="button" id="classBTN" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">        
        Ticket for <div style="width:8px; display:inline-block;" class="dropdown-toggle ticket-for-toggle" id="ticket-for-toggle"></div> <p><small id="passenger-count"></small><small id="ticket-type-label" class="ticket-type-label"></small></p>
      </button>

      <form class="dropdown-menu dropdown-menu-right pl-3 pr-3" id="drop-passenger-counter" style="width:auto;">        
        
        <h6 class="ml-2"> <b>Adult:</b> <p><small>Passengers over 12</small></p><input onchange="checkNumber()" id="adult-passenger" type="number" value="1" min="1" max="9" step="1" /></h6>
        <hr>
        <h6 class="ml-2"> <b>Children:</b> <p><small>2-12</small></p> <input type="number" value="0" min="0" max="9" step="1" /></h6>
        
        <hr class="bg-dark">

        <div class="custom-control custom-radio" style="font-size:16px;">
          <input onclick="checkEco()" type="radio" class="custom-control-input" id="eco-cls" name="class" value="{{$value='eco'}}">
          <label class="custom-control-label radio-label" for="eco-cls">{{ __('msg.economy-cls')}}</label>
        </div>

        <div class="custom-control custom-radio" style="font-size:16px;">
          <input onclick="checkBus()" type="radio" class="custom-control-input" id="bus-cls" name="class" value="{{$value='bus'}}">
          <label class="custom-control-label radio-label" for="bus-cls">{{ __('msg.business-cls')}}</label>
        </div>

      </form>      
    </div>
    <!--Ticket For END --------------------------->

    <!--<select style="height:55px;" class="class col-xl-1 col-lg-2 col-md-2 col-sm-4 col-8 search ml-1" placeholder="Class"
      id="choose">
      <option class="choose-class" disabled selected><span>{{ __('msg.choose-cls')}}</span></option>
      <option value="eco">{{ __('msg.economy-cls')}}</option>
      <option value="bus">{{ __('msg.business-cls')}}</option>      
    </select>-->

    <!-- Search BUTTON ---------------------------->
    <button href="/welcome" type="button" class="col-xl-0.1 col-lg-2 col-md-2 col-sm-4 col-8 btn search-btn ml-1" id="search-btn"
      style="margin-left:1% !important; height:55px !important;"> <span class="search-label">{{ __('msg.search')}} <i
          class="fas fa-search search-ico" id="search-ico"></i></span>
    </button>
  </div>

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
    <h1 class="text-info text-center col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-8"> {{ __('msg.new-to-us')}} <a href="register"><button type="button"
          class="btn-lg btn-outline-danger btn-cont3 btn-new">
          {{ __('msg.sign-up')}}
        </button></a></h1>
    <h1 class="text-success text-center col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-8"> {{ __('msg.check-our-timetable')}} <a href=""><button type="button"
          class="btn-lg btn-outline-primary btn-cont3 btn-timetable">
          {{ __('msg.check-out')}}
        </button></a></h1>
  </div>
</div>





<style>
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
    margin-bottom: 20%;
  }

  .search-div {}

  .cont1 {

    background-color: rgba(5, 38, 63, 0.80);
    height: 100%;
    width: 100%;

    /* ^---Fixed width issue---^ */
    padding-top: 6%;
    padding-bottom: 0.1%;
    background-blend-mode: soft-light;
  }

  .trip-type {
    padding-top: 50px;
    height: 70px;
    display: block;
    margin-left: 19%;
    margin-top: 5%;
    margin-bottom: 1.5%;
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

  .from {
    margin-left: 23%;
  }

/* Ticket For Styles  START ----------------*/
  .ticket-for:focus .ticket-for-toggle{
    transform:rotateX(180deg);
    transition: 0.3s ease-in;
  }
  #dropdownMenuButton:focus{
    background-color:#07395E;
    color:#7b7b7b;
  }
  .radio-label:hover{
    color:#5893D3;
    cursor: pointer;
    font-style: bold;
  }
  .btn-decrement{
    color:white;
    background-color:var(--laravel-logo);
    border-radius:10%;
  }

  .btn-increment{
    color:white;
    border-radius:10%;
    background-color:var(--primary-skyblue);
  }

  /* Ticket For Styles  END --------------------*/

  .search:focus {
    background-color: var(--menu-nav);
    filter:brightness(150%);
    color: white;
  }

  #search-btn {
    -webkit-text-size-adjust: auto;
    background-color: #5893D3;
    margin-bottom: 14%;
    height: 60%;
    width: 11% !important;
  }

  #search-btn:focus {}

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

  .choose-class {
    background-color: lightgrey !important;
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
  singleDatePicker:false
    })
  
    $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });
  
    $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>

<script> /* For turning inputs to bootstrap-input-spinner */
  $("input[type='number']").inputSpinner();
</script>

<script>
  function switchOffTo() {
  if (document.getElementById('from') !== undefined) {
    if (document.getElementById('to').style.display == 'block') {
      document.getElementById('from').style.display = 'block';
      document.getElementById('to').style.display = 'none';
      input[name="datefilter"].daterangepicker
    } else {
      document.getElementById('from').style.display = 'block';
      document.getElementById('to').style.display = 'none';
      
    }
  }
  
}
</script>

<script>
  function switchOnTo() {
  if (document.getElementById('from') !== undefined) {
    if (document.getElementById('to').style.display == 'none') {
      document.getElementById('from').style.display = 'block';
      document.getElementById('to').style.display = 'block';
    } else {
      document.getElementById('from').style.display = 'block';
      document.getElementById('to').style.display = 'block';
    }
  }
}
</script>

<script>
 function checkEco(){
   var checkBox = document.getElementById('eco-cls');
   var text = document.getElementById('ticket-type-label');
   if(checkBox.checked == true){
     text.innerHTML = "  ECO";
   }
   else{
     text.innerHTML ="  BUS";
   }
 }

 function checkBus(){
   var checkBox = document.getElementById('bus-cls');
   var text = document.getElementById('ticket-type-label');
   if(checkBox.checked == true){
     text.innerHTML = "  BUS";     
   }
   else{
     text.innerHTML ="  ECO";
   }
 }
</script>

<script>
  function checkNumber(){
    var text = document.getElementById('passenger-count');
    text.innerHTML = document.getElementById('adult-passenger').value + " passengers";
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