@extends('layouts.app')

@section('content')

<div class="cont">

    <div class="justify-content-center cont1">
      <input type="text" class="form-control from search" id="" aria-describedby="" placeholder="{{ __('msg.from')}}">
      <input type="text" class="form-control to search" id="" aria-describedby="" placeholder="{{ __('msg.to')}}">
      <input placeholder="{{ __('msg.departure')}}" class="form-control departure search" type="text" onfocus="(this.type='date')"
        onblur="(this.type='text')" id="date" />
      <input placeholder="{{ __('msg.arrival')}}" class="form-control arrival search" type="text" onfocus="(this.type='date')"
        onblur="(this.type='text')" id="date" />
    </div>

 

  <div class="cont2">
    <img class="news-svg" src="logo/news.svg" alt="Kiwi standing on oval">
    <h1 class="news-h1 text-center">Get news about upcoming changes and possible discounts</h1>
    <h3 class="text-muted fd">Sign up to our mailing list!</h3>

    <div class="form-group">
      <input type="email" class="form-control email" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>


  </div>

  <div class="cont3">
    <h1 class="text-light new text-center"> New to us? <a href="register"><button type="button"
          class="btn-lg btn-danger btn-cont3">
          Sign Up!
        </button></a></h1>
    <h1 class="text-light timetable text-center"> Check our Timetables <a href=""><button type="button"
          class="btn-lg btn-danger btn-cont3">
          Check out!
        </button></a></h1>

  </div>
</div>


<style>


  .cont1 {
    background-image: url('logo/background5.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;
    /* ^---Fixed width issue---^ */
    padding-top: 7.5%;
    padding-bottom: 7.5%;      
  }

  .search{
    height:auto;
    margin-top:13%;
    margin-bottom:14%;
    margin-right:0.3%;
    width:15%;
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
    width: 10%;
    height: 10%;
    margin-top: auto;
    margin-left: auto;
  }

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
    padding-top: 50px;
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
    width: 25%;

  }

  .btn-cont3 {
    margin-top: 25px;
  }

  body {}
</style>

@endsection