@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADmin Appolo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
      <h1>Cities </h1>
      <br>
      
      <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">city_name</th>
            <th scope="col">zip_code</th>
            <th scope="col">discreption</th>
            <th scope="col">distance</th>
            <th  class="fas fa-edit"> edit</th>
            <th></th>
            <th class="fas fa-trash-alt">delete</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach($cities as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->city_name}}</td>
                <td>{{$i->zip_code}}</td>
                <td>{{$i->description}}</td>
                <td>{{$i->distance}}</td>
               <td> {{link_to_route('cities.edit','edit',$i,['class'=>'btn btn-success'])}}
              </td>
                <td></td>
                <td> {{link_to_route('cities.show','Delete',$i,['class'=>'btn btn-danger'])}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div>
      {{link_to_route('cities.create','add a new item',null,['class'=>'btn btn-primary'])}}
      </div>
      
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
  color: green;
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
   <li ><a href="" ><i class="fas fa-user"></i>User</a></li> 
    <li><a href="#"><i class="fas fa-city"></i>cities</a></li>
    <li><a href="#"><i class="fas fa-calendar-check"></i>ticket </a></li>
    <li><a href="#"><i class="fas fa-suitcase-rolling"></i>Passenger List</a></li>
    <li><a href="#"><i class="fas fa-train"></i>Trips</a></li>
    <li><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
  </ul>
</div>
 <section></section>
 
 
  </body>
</html>
@endsection
