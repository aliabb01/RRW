@extends('layouts.app')

@section('content')
<form action="/store" method="post">
    @csrf
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="container form-group text-center">
   
      <label for="name">Name:</label>
      <input type="text" class="form-control one " name="name_user" required >
     
      
        <label for="comment">Comment</label>
        <input type="text" class="form-control two " name="comment" required>        
     
   <br>
    <button type="submit" class="btn btn-primary back ">Save</button>
    <a href="/welcome" class="btn btn-danger back">Back</a>
</div >
  </form>


  @foreach($comments as $i)
  <div class="third">
  <tr>
      <hr>
      <i class="fas fa-2x fa-user-circle"></i>
      <td class="user-name"> <b class="label-name">Name:</b> 
        {{$i->name_user}}</td>
        <br>
      <td class="user-comment">{{$i->comment}}</td>
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
        margin-left: 15%; 
      }
      .back
      {
        width:60px;
        height:40px;
      }

      .user-name{
        margin-bottom:5%;
        
      }

      .label-name{
        font-size:125%;
      }
  </style>
@endsection