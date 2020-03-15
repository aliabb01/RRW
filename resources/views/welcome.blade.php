@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <h1 class="text-light">This is Home page</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                 <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
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
                    <img class="d-block w-100 img-thumbnail bg-dark" src="logo/slide2.png"  alt="Second slide" height="500" width="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Our Reach</h3>
                        <p class="text-white bg-dark" style="border-radius: 15px">From Klaipeda till Ignalina</p>
                      </div>
                  </div>
                  <!--<div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div> -->
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
</div>
@endsection
