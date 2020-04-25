@extends('layouts.app')

@section('content')

<form action="/store" method="post">
  @csrf
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="container form-group">
    <div class="container text-center">
      <label for="name">Name:</label>
      <input type="text" class="form-control one " name="name_user" required><br>
      <label for="comment">Comment:</label>
      <input type="text" class="form-control two " name="comment" required><br>
      <button type="submit" class="btn btn-primary back ">Post</button>
      <a href="/welcome" class="btn btn-danger back">Back</a>
    </div>
    <br>
  </div>
</form>

@foreach($comments as $i)
<div class="media">
  <div class="media-left">
    <img class="mr-3 ml-3" src="https://img.icons8.com/ios-filled/50/000000/user-male-circle.png" />
    <!-- Female Version   <img src="https://img.icons8.com/ios-filled/50/000000/user-female-circle.png"/> -->
  </div>
  <div class="media-body">
    <h5 class="mt-0 media-heading">
      <span class="user-name">
        {{$i->name_user}} </span> <small><i>Posted on February 19, 2016</i></small>
    </h5>
    <p class="user-comment">{{$i->comment}}</p>
  </div>
</div>
<hr>
@endforeach


<style>
  .one {
    margin-left: 42%;
    width: 200px;
    height: 40px;
  }

  .two {
    margin-left: 25%;
    width: 600px;
    height: 150px;
  }

  .third {
    margin-left: 15%;
  }

  .back {
    width: 60px;
    height: 40px;
  }

  .user-name {
    margin-bottom: 5%;
    font-size: 120%;

  }

  .label-name {
    font-size: 125%;
  }
</style>

@endsection