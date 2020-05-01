@extends('layouts.app')

@section('content')

<div class="cont">
  <!-- <div class="spinner">  
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
  <span class="sr-only">Loading...</span>
  </div>  -->
  <div class="justify-content-center cont1">

    <div class="control-group trip-type text-center">

      <label class="control control-radio text-light mr-3">
        One-way
        <input type="radio" name="radio" id="oneway" value="one" />
        <div class="control_indicator"></div>
      </label>
      <label class="control control-radio text-light">
        Full-trip
        <input type="radio" name="radio" id="full-trip" value="full" />
        <div class="control_indicator"></div>
      </label>
    </div>

    <label style="margin-left:23%;" class="text-white from-label">FROM</label>
    <label style="margin-left:9.2%;" class="text-white to-label">TO</label>
    <div class="container-justify-center row">
      <input type="text" class="form-control from search" id="" aria-describedby="" placeholder="{{ __('msg.from')}}">
      <input type="text" class="form-control to search" id="" aria-describedby="" placeholder="{{ __('msg.to')}}">
      <input placeholder="{{ __('msg.departure')}}" class="form-control datepicker departure search" type="text"
        id="dates" name="datefilter" />
      <div class="search">
        <select class="class" placeholder="Class">
          <option value="choose"><span>{{ __('msg.choose-cls')}}</span></option>
          <option value="eco">{{ __('msg.economy-cls')}}</option>
          <option value="bus">{{ __('msg.business-cls')}}</option>
        </select>
      </div>
      <button type="button" class="btn search-btn" id="search-btn"> <span class="search-label">{{ __('msg.search')}} <i
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
      <button type="submit" class="btn btn-primary">{{ __('msg.submit')}}</button>
    </div>


  </div>

  <div class="cont3">
    <h1 class="text-light new text-center"> {{ __('msg.new-to-us')}} <a href="register"><button type="button"
          class="btn-lg btn-danger btn-cont3 btn-new">
          {{ __('msg.sign-up')}}
        </button></a></h1>
    <h1 class="text-light timetable text-center"> {{ __('msg.check-our-timetable')}} <a href=""><button type="button"
          class="btn-lg btn-primary btn-cont3 btn-timetable">
          {{ __('msg.check-out')}}
        </button></a></h1>
  </div>
</div>


<style>
  .spinner {
    margin: auto;
    text-align: center;
  }

  .row {
    width: 100%;
    height: 100px;
    margin-bottom: 15%;
  }

  .cont1 {
    background-image: url('logo/background5.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    /* ^---Fixed width issue---^ */
    padding-top: 7.5%;
    padding-bottom: 7.5%;
  }

  .trip-type {
    padding-top: 50px;
    height: 70px;
    display: block;
    margin-left: 19%;
    margin-top: 5%;
    margin-bottom:1.5%;
    width: 25%;
  }

  .content-justify-center {
    height: 100px !important;
  }

  .search {
    /*height:auto;*/
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    margin-bottom: 14%;
    margin-right: 0.5%;
    height: 3.5rem;
    width: 11%;
  }

  .from {
    margin-left: 23%;
  }

  .from-label{
    filter: opacity(0);
  }

  .from:focus .from-label {
    filter: opacity(1);
  }

  #search-btn {
    -webkit-text-size-adjust: auto;
    background-color: #5893D3;
    margin-bottom: 14%;
    margin-left: 1%;
    height: 60%;
    width: 11%;
  }

  .search-btn:hover {
    filter: contrast(150%);
    border-color: orange;
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    -moz-box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
    box-shadow: 0px 10px 13px -7px rgba(0, 0, 0, 0.55);
  }

  .search-label {
    font-size: 1.5rem;
  }

  .search-ico {
    margin-left: 25%;
  }

  #search-btn #search-ico {
    /* HOVER OFF */
    transition: ease 0.3s;
  }

  #search-btn:hover #search-ico {
    /* HOVER ON */
    color: orange;
    margin-left: 15%;
    transition: ease 0.3s;
  }

  .class {
    border-radius: 4%;
    width: 100%;
    height: 100%;
  }

  /* .from {
    float: left;
    height: auto;
    margin-top: 15%;
    margin-left: 15%;
    margin-bottom: 17%;
    width: 25%;
  }

  .to {
    float: left;
    height: auto;
    margin-top: 15%;
    margin-left: 5%;
    margin-bottom: 17%;
    width: 25%;
  }


  .departure {
    float: left;
    height: auto;
    margin-top: 15%;
    margin-left: 5%;
    margin-bottom: 17%;
    width: 25%;
  }


  .arrival {
    float: left;
    height: auto;
    margin-top: 15%;
    margin-left: 5%;
    margin-bottom: 17%;
    width: 25%;
  }  */

  .cont2 {
    background-color: rgb(239, 240, 241);
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

  .cont3 {
    background-image: url('logo/background4.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 450px;
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

  /* Radio buttons*/

  .control {
    font-family: arial;
    display: inline;
    position: relative;
    padding-left: 30px;
    margin-bottom: 5px;
    padding-top: 3px;
    cursor: pointer;
    font-size: 16px;
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

@endsection

@section('scripts')
<script type="text/javascript">
  $(window).load(function(){
     $('.spinner').fadeOut();
});
</script>
@stop