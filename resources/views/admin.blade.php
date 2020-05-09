@extends('layouts.app')

@section('content')
<header class="navbar navbar-light">
  <button class="navbar-toggler sidebar-toggler" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
</header> 
<div class="c-sidebar c-sidebar-dark c-sidebar-show">
  
  <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-title">Nav Title</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="#">
        <i class="c-sidebar-nav-icon cil-speedometer"></i> Nav item
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="#">
        <i class="c-sidebar-nav-icon cil-speedometer"></i> With badge
        <span class="badge badge-primary">NEW</span>
      </a>
    </li>
    <li class="c-sidebar-nav-item nav-dropdown">
      <a class="c-sidebar-nav-link nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-puzzle"></i> Nav dropdown
      </a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="#">
            <i class="c-sidebar-nav-icon cil-puzzle"></i> Nav dropdown item
          </a>
        </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="#">
            <i class="c-sidebar-nav-icon cil-puzzle"></i> Nav dropdown item
          </a>
        </li>
      </ul>
    </li>
    <li class="c-sidebar-nav-item mt-auto">
      <a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io">
        <i class="c-sidebar-nav-icon cil-cloud-download"></i> Download CoreUI</a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/">
        <i class="c-sidebar-nav-icon cil-layers"></i> Try CoreUI
        <strong>PRO</strong>
      </a>
    </li>
  </ul>
  <button class="c-sidebar-minimizer c-brand-minimizer" type="button"></button>
</div>

@endsection




<!--<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Apollon Admin</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
      <style>
          @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
*{
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
}
body {
  font-family: 'Roboto', sans-serif;
}
.sidebar {
  position: fixed;
  left: -250px;
  width: 250px;
  height: 100%;
  background: #042331;
  transition: all .5s ease;
}
.sidebar header {
  font-size: 22px;
  color: white;
  line-height: 70px;
  text-align: center;
  background: #063146;
  user-select: none;
}
.sidebar ul a{
  display: block;
  height: 100%;
  width: 100%;
  line-height: 65px;
  font-size: 20px;
  color: white;
  padding-left: 40px;
  box-sizing: border-box;
  border-bottom: 1px solid black;
  border-top: 1px solid rgba(255,255,255,.1);
  transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 16px;
}
#check{
  display: none;
}
label #btn,label #cancel{
  position: absolute;
  background: #042331;
  border-radius: 3px;
  cursor: pointer;
}
label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
  transition: all .5s;
}
label #cancel{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all .5s ease;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
#check:checked ~ section{
  margin-left: 250px;
}
section{
  background: url(bg.jpeg) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: all .5s;
}
h2
{
    color: green;
}

      </style>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
       
    <header>
        <ul>
            <i class="fas fa-user-cog"></i>
           <h2>online</h2>
           <i class="fad fa-octagon"></i>
            
        </ul>
    </header>
  <ul>
    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
   <li ><a href="useres" ><i class="fas fa-user"></i>User</a></li> 
    <li><a href="cities"><i class="fas fa-city"></i>cities</a></li>
    <li><a href="#"><i class="fas fa-calendar-check"></i>ticket </a></li>
    <li><a href="#"><i class="fas fa-suitcase-rolling"></i>Passenger List</a></li>
    <li><a href="#"><i class="fas fa-train"></i>Trips</a></li>
    <li><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
  </ul>
</div>
 <section></section>

  </body>
</html> -->
