@extends('layouts.app')

@section('content')

<div class="cont">
<!-- <div class="spinner">  
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
  <span class="sr-only">Loading...</span>
  </div>  -->
    <div class="justify-content-center cont1">
      <input type="text" class="form-control from search" id="" aria-describedby="" placeholder="{{ __('msg.from')}}">
      <input type="text" class="form-control to search" id="" aria-describedby="" placeholder="{{ __('msg.to')}}">
      <input placeholder="{{ __('msg.departure')}}" class="form-control departure search" type="text" onfocus="(this.type='date')"
        onblur="(this.type='text')" id="date" />        
        <div class="search">
        <select class="class" placeholder="Class">
          <option value="choose"><span>{{ __('msg.choose-cls')}}</span></option>       
          <option value="eco">{{ __('msg.economy-cls')}}</option>
          <option value="bus">{{ __('msg.business-cls')}}</option>
        </select>
      </div>
        <button type="button" class="btn search-btn search" id="search-btn"> <span class="search-label">{{ __('msg.search')}} <i class="fas fa-search search-ico" id="search-ico"></i></span></button>
    </div>

 

  <div class="cont2">
    <img class="news-svg" src="logo/news.svg" alt="Kiwi standing on oval">
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

.spinner{
  margin:auto;
  text-align: center;
}

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
    /*height:auto;*/    
    -webkit-box-shadow: 0px 10px 13px -7px rgba(0,0,0,0.55);
-moz-box-shadow: 0px 10px 13px -7px rgba(0,0,0,0.55);
box-shadow: 0px 10px 13px -7px rgba(0,0,0,0.55);
    margin-top:13%;
    margin-bottom:14%;
    margin-right:0.1%;
    height:3.5rem;
    width:11%;
  }

  .search-btn{
    background-color:#5893D3;    
    margin-top:13%;
    margin-bottom:14%;
    margin-left:1%;
    height:3.5rem;
    width:11%;
  }
  .search-btn:hover{
    filter:contrast(150%);    
  }

  .search-label{
    font-size:1.5rem;
  }

  .search-ico{
    margin-left:30%;
  }
  
  #search-btn #search-ico{          /* HOVER OFF */
    transition:ease 0.3s;
  }

  #search-btn:hover #search-ico{     /* HOVER ON */
    color:orange;
    margin-left:15%;
    transition:ease 0.3s;
  }

  .class{
    border-radius:4%;
    width:100%;
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
    width: 200px;
    height: 200px;
    margin-top: auto;
    margin-left: auto;
  }

  .news-svg:hover{
    
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
    width: 30%;
    margin-left:2%;
  }

  .btn-cont3 {
    margin-top: 2%;    
  }

  .btn-new:hover{
    filter: contrast(90%);
  }

  .btn-timetable:hover{
    filter: contrast(90%);
  }

  body {}
</style>
@endsection

@section('scripts')
<script type="text/javascript">
  $(window).load(function(){
     $('.spinner').fadeOut();
});
</script>
@stop