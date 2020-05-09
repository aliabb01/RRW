@extends('layouts.app')

@section('content')
<div class="feedback">
  <h2 class="text-center pt-4 pb-4 bg-info">Leave a Feedback</h2>
  <form action="/store" method="post">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="container feedback-main form-group">      
        <label for="name">Name:</label>
        <input type="text" class="form-control" style="width:150px;" name="name_user" required><br>
        <label for="comment">Comment:</label>
        <textarea type="text" class="form-control" style="resize:none; width:500px; height:300px;" name="comment" required></textarea><br>
        <button type="submit" class="btn btn-primary leave">Leave Feedback <i class="fas fa-comment comment-ico"></i></button>    
      <br>
    </div>
  </form>
  
  @foreach($comments as $i)
  <hr>
  <div class="media ml-2">
    <div class="media-left">
      <img style="background-color:white; border-radius:100%;" class="mr-3 ml-3"
        src="https://img.icons8.com/ios-filled/50/000000/user-male-circle.png" />
      <!-- Female Version   <img src="https://img.icons8.com/ios-filled/50/000000/user-female-circle.png"/> -->
    </div>
    <div class="media-body">
      <h5 class="mt-0 media-heading">
        <span class="user-name">
          {{$i->name_user}} </span> <small><i>Posted on <span id="post-date"></span></i></small>
      </h5>
      <p class="user-comment">{{$i->comment}}</p>
    </div>
  </div>

  @endforeach
  <hr style="margin-bottom:0px;">
</div>

<style>
  .feedback {
    background-color: var(--body-background);
  }

  .feedback-main{
    border-top-width: 0px;
    border-left-width: 2px;
    border-bottom-width: 0px;
    border-right-width:2px;
    border-right-color:black;
    border-style:solid;
  }

  .leave:hover .comment-ico{
    color:var(--primary-orange);
    transition:0.4s;
  }

  .user-name {
    margin-bottom: 5%;
    font-size: 120%;

  }

  .label-name {
    font-size: 125%;
  }
</style>

<script>
var today = new Date();  
var date = today.getFullYear()+'-'+(today.getMonth()+1);
document.getElementById('post-date').innerHTML = date;
</script>

@endsection