@extends('layouts.app')

@section('content')
<div class="text-center who">
  <h1>Who are we <img class="question animated shake" src="https://img.icons8.com/nolan/96/question-mark.png" /></h1>  
</div>

<div class="container column">

  <div class="card c1 animated zoomIn" id="c1" style="width: 18rem;">
    <div class="card-header text-center c1h" id="c1h">
      <img src="https://06edkm734f-flywheel.netdna-ssl.com/wp-content/uploads/2018/01/Who-are-we-icon.svg" class="card-img-top who-img" alt="Who are we">
      <h3 class="card-title">Who are we?</h3>
    </div>
    <div class="card-body">      
      <h5 class="card-text">We are Apollon Railway. A railway company based in Kaunas, Lithuania.</h5>
    </div>
  </div>

</div>

<style>
  body{
  }

  .card-body{
    height:250px;    
  }

  .card-text{
    
  }

  .c1{
    margin-top:2%;
    margin-bottom:3%;
    border-radius: 10%;    
  }

  .c1:hover{
    transform: scale(1.080);
    transition: color .8s ease-in-out;
    
  }

  .c1h{
    background-color:deepskyblue;  
    filter:contrast(195%);     
    transition: color 0.8s, ease;
  }

  #c1:hover > #c1h{
    filter: grayscale(0);
   /* color:white;*/
  
  }

  .question {
    
  }

  .who {
    background-color: lightgreen;
    width:100%;
  }

  .who-img{
    background-color:transparent;
    height:100px;
    width:100px;
  }
</style>

<!--<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      CS <h1 class="text-light">This is About page</h1> CE
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          CS <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> CE
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-thumbnail bg-dark" src="logo/slide1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h2>Apollon Railway</h2>
              <p class="text-white bg-dark" style="border-radius: 15px">Travel made easier!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-thumbnail bg-dark" src="logo/slide2.png" alt="Second slide" height="500"
              width="">
            <div class="carousel-caption d-none d-md-block">
              <h3>Our Reach</h3>
              <p class="text-white bg-dark" style="border-radius: 15px">From Klaipeda till Ignalina</p>
            </div>
          </div>
          CS<div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div> CE
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div> -->
@endsection