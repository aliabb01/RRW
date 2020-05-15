@extends('layouts.app')

@section('content')
<div class="about">

  <body onload="startTime()">
    <div class="float-right">
      <h5 id="clock"></h5>
    </div>
    <div class="container about-cont1">
      <h1 class="text-center">About Us</h1>
      <h4 class="text-center container"><b><span id="comp-name-about">Apollon Railway</span></b> is a company
        originating
        from Kaunas, Lithuania. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sapiente fugit veritatis
        libero distinctio mollitia, consequuntur nulla quos molestias, quod dolore? Officiis ipsum mollitia cumque
        incidunt minima similique quasi possimus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus
        officia laboriosam aspernatur maxime at voluptatum saepe ducimus dignissimos eos, quos ipsa debitis facilis illo
        itaque laborum, voluptas quidem recusandae possimus.</h4>
    </div>
    <div class="text-center who">
      <h2>Have any questions <img class="question animated rotateIn"
          src="https://img.icons8.com/color/100/000000/question-mark.png" /></h2>
    </div>

    <div class="who-are-we row">
      <div class="card c1 animated zoomIn sha" id="c1" style="width: 18rem;">
        <div class="card-header text-center c1h" id="c1h">
          <img src="https://img.icons8.com/dusk/100/000000/conference-call.png" />
          <h3 class="card-title intro">Introduction</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">We are Apollon Railway. A railway company based in Kaunas, Lithuania.</h5>
        </div>
      </div>

      <div class="card c2 animated zoomIn sha" id="c2" style="width: 18rem;">
        <div class="card-header text-center c2h" id="c2h">
          <img src="https://img.icons8.com/color/100/000000/ask-question.png" />
          <h3 class="card-title our-job">Our Job</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">We support reservation services for railways through our website.</h5>
        </div>
      </div>

      <div class="card c3 animated zoomIn sha" id="c3" style="width: 18rem;">
        <div class="card-header text-center c3h" id="c3h">
          <img src="https://img.icons8.com/dusk/100/000000/service.png" />
          <h3 class="card-title why-join-us">Why Join Us?</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">We provide our users with one of the most user friendly website and reliable services
          </h5>
        </div>
      </div>

      <div class="card c4 animated zoomIn sha" id="c4" style="width: 18rem;">
        <div class="card-header text-center c4h" id="c4h">
          <img src="https://img.icons8.com/dusk/100/000000/user-shield.png" />
          <h3 class="card-title sec-of-users">Security of Users</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">We care about our users' privacy and make sure their data is safe.</h5>
        </div>
      </div>


    </div>

    <!-- DRIVERS -->
    <div class="text-center our-drivers">
      <h2 class="">Our Drivers <a href="?" data-toggle="tooltip" data-placement="right" data-html="true"
          title="Tested and <b>verified</b> train drivers"><img class="animated heartBeat"
            src="https://img.icons8.com/plasticine/100/000000/approval.png" /></a></h2>
    </div>

    <div class="our-drivers-header row">
      <div class="card c1 animated zoomIn sha" id="c1" style="width: 18rem;">
        <div class="card-header drivers-header text-center c1h" id="c1h">
          <img src="https://img.icons8.com/dusk/100/000000/user-male-skin-type-5.png" />
          <h3 class="card-title driver driver-1">{{$prof = 'Bob'}}</h3>
        </div>
        <div class="card-body">
          <h4 class="card-text">{{$prof}} has been with us since we began</h4>
          <hr>
          <blockquote class="blockquote">Working in Apollon gave me a lot of experience in this field</blockquote>
          <footer class="blockquote-footer">{{$prof}} ,<cite title="Source Title">Train Driver</cite></footer>
          <div>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star-half-alt checked"></span>
          </div>
        </div>
        <div class="card-footer text-center">
          <a class="btn btn-outline-danger" href="#" data-toggle="tooltip" data-placement="bottom"
            title="Contact {{$prof}}">Contact</a>
        </div>
      </div>

      <div class="card c2 animated zoomIn sha" id="c2" style="width: 18rem;">
        <div class="card-header drivers-header text-center c2h" id="c2h">
          <img src="https://img.icons8.com/dusk/100/000000/administrator-male.png" />
          <h3 class="card-title driver driver-2">{{$prof = 'Joe'}}</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">{{$prof}} , worked for multiple companies, before he found out about us</h5>
          <hr>
          <h6 class="blockquote">One of the best companies in the world hired me. I am so lucky!</h6>
          <footer class="blockquote-footer">{{$prof}} ,<cite title="Source Title">Train Driver</cite></footer>
          <div>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
          </div>
        </div>
        <div class="card-footer text-center">
          <a class="btn btn-outline-danger" href="#" data-toggle="tooltip" data-placement="bottom"
            title="Contact {{$prof}}">Contact</a>
        </div>
      </div>

      <div class="card c3 animated zoomIn sha" id="c3" style="width: 18rem;">
        <div class="card-header drivers-header text-center c3h" id="c3h">
          <img src="https://img.icons8.com/dusk/100/000000/user.png" />
          <h3 class="card-title driver driver-3">{{$prof = 'Bob2'}}</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">{{$prof}} was hired recently and he's eager to start working</h5>
          <hr>
          <h6 class="blockquote">I found out about Apollon from internet. They had good reviews so i joined them</h6>
          <footer class="blockquote-footer">{{$prof}} ,<cite title="Source Title">Train Driver</cite></footer>
          <div>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
          </div>
        </div>
        <div class="card-footer text-center">
          <a class="btn btn-outline-danger" href="#" data-toggle="tooltip" data-placement="bottom"
            title="Contact {{$prof}}">Contact</a>
        </div>
      </div>

      <div class="card c4 animated zoomIn sha" id="c4" style="width: 18rem;">
        <div class="card-header drivers-header text-center c4h" id="c4h">
          <img src="https://img.icons8.com/dusk/100/000000/person-female.png" />
          <h3 class="card-title driver driver-4">{{$prof = 'Amy'}}</h3>
        </div>
        <div class="card-body">
          <h5 class="card-text">{{$prof}} , has been in this field for a long time.She couldnt find a company that would
            offer her good salary</h5>
          <hr>
          <h6 class="blockquote">I am grateful for working here in Apollon</h6>
          <footer class="blockquote-footer">{{$prof}} ,<cite title="Source Title">Train Driver</cite></footer>
          <div>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star"></span>
          </div>
        </div>
        <div class="card-footer text-center">
          <a class="btn btn-outline-danger" href="#" data-toggle="tooltip" data-placement="bottom"
            title="Contact {{$prof}}">Contact</a>
        </div>
      </div>
    </div>
</div>

<style>
  @import url(//db.onlinewebfonts.com/c/dc6734899329fcbdd770b32dc47059d8?family=Sofia+Pro+Light);
  @import url('https://fonts.googleapis.com/css?family=Orbitron');

  @font-face {
    font-family: "Sofia Pro Light";
    src: url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.eot");
    src: url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.woff") format("woff"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.svg#Sofia Pro Light") format("svg");
  }

  .about {
    background-color: var(--body-background);
  }

  .about-cont1 {
    padding-top: 35px;
    margin-bottom: 35px;
  }

  #comp-name-about {
    font-family: "Sofia Pro Light";
  }

  .sha {
    transition: box-shadow .9s;
    border: 2px solid #ccc;
    background: #fff;
  }

  .sha:hover {
    box-shadow: 0 0 11px rgba(33, 33, 33, .5);
  }

  .who-are-we {
    width: 100%;
  }

  .our-drivers-header {
    width: 100%;
  }

  .container .row {}

  .card {
    margin-left: 8%;
  }

  .card-body {
    height: 250px;
  }

  .card-text {}

  .c1 {
    margin-top: 2%;
    margin-bottom: 3%;
  }

  .c1:hover {
    transform: scale(1.080);
    transition: color .8s ease-in-out;
  }

  .c1h {
    background-color: deepskyblue;
    filter: contrast(195%);
    transition: color 0.8s, ease;
  }

  #c1:hover>#c1h {
    filter: grayscale(0);
    /* color:white;*/
  }

  .intro {
    font-family: "Sofia Pro Light";
  }

  .c2 {
    margin-top: 2%;
    margin-bottom: 3%;
  }

  .c2:hover {
    transform: scale(1.080);
    transition: color .8s ease-in-out;
  }

  .c2h {
    background-color: coral;
    transition: color 0.8s, ease;
  }

  #c2:hover>#c2h {
    filter: contrast(135%);
    /* color:white;*/
  }

  .our-job {
    font-family: "Sofia Pro Light";
  }

  .c3 {
    margin-top: 2%;
    margin-bottom: 3%;
  }

  .c3:hover {
    transform: scale(1.080);
    transition: color .8s ease-in-out;
  }

  .c3h {
    background-color: #41A317;
    transition: color 0.8s, ease;
  }

  #c3:hover>#c3h {
    filter: contrast(135%);
    /* color:white;*/

  }

  .why-join-us {
    font-family: "Sofia Pro Light";
  }

  .c4 {
    margin-top: 2%;
    margin-bottom: 3%;
  }

  .c4:hover {
    transform: scale(1.080);
    transition: color .8s ease-in-out;
  }

  .c4h {
    background-color: #B6B6B4;
    transition: color 0.8s, ease;
  }

  #c4:hover>#c4h {
    filter: contrast(150%);
    /* color:white;*/

  }

  .who {
    background-color: lightgreen;
    width: 100%;
  }

  .our-drivers {
    width: 100%;
    background-color:plum;
  }

  .circle-tick-drivers {
    color: #348017;
    margin-left: 20px;
    background-color: #1DA1F2;
    border-radius: 100%;
  }

  .drivers-header {
    border-radius: 100%;
  }

  .checked {
    color: orange;
  }

  .driver {
    font-family: "Sofia Pro Light";
  }



  /* Clock */


  #clock {
    font-family: 'Orbitron', sans-serif;
    color: black;
    font-size: 20px;
    text-align: center;
    padding-top: 40px;
    padding-bottom: 40px;
  }
</style>


<!-- Real Live Time -->
<script>
  function currentTime() {
  var date = new Date(); /* creating object of Date class */
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  document.getElementById("clock").innerText = hour + " : " + min + " : " + sec; /* adding time to the div */
    var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime(); /* calling currentTime() function to initiate the process */
</script>

@endsection