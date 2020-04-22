@extends('layouts.app')

@section('content')
<form action="/store" method="post">
    @csrf
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="container form-group text-center">
   
      <label for="name">Name:</label>
      <input type="text " class="form-control one " name="name_user" required >
     
      
        <label for="comment">Comment</label>
        <input type="text " class="form-control two " name="comment" required>        
     
   <br>
    <button type="submit" class="btn btn-primary back ">Save</button>
    <a href="/welcome" class="btn btn-danger back">Back</a>
</div >
  </form>

<div class=" third">
  @foreach($comments as $i)
  <tr>
      <hr>
      <td> Name: {{$i->name_user}}</td>
 <br>
      <td>Comment:{{$i->comment}}</td>
      <hr>
</div> 
  </tr>
  @endforeach
  
  
  <style>
      .one
      {
          margin-left: 44%;
          width:200px;
          height:40px;
      }
      .two
      {
          margin-left: 40%;
          width:600px;
          height:150px;
      }
      .third
      {
        margin-left: 44%; 
      }
      .back
      {
        width:60px;
        height:40px;
      }
  </style>
@endsection